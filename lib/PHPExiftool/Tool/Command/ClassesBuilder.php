<?php

/**
 * This file is part of the PHPExiftool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Tool\Command;

use DOMDocument;
use DOMElement;
use Exception;
use Monolog\Handler\NullHandler;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use PHPExiftool\ClassUtils\tagGroupBuilder;
use PHPExiftool\Exiftool;
use PHPExiftool\InformationDumper;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Helper\ProgressBar;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\DomCrawler\Crawler;


/**
 *
 * @author      Romain Neutron - imprec@gmail.com
 * @license     http://opensource.org/licenses/MIT MIT
 */
class ClassesBuilder extends Command
{
    protected InputInterface $input;
    protected OutputInterface $output;


    private ?ProgressBar $progress = null;

    /**
     *
     * @var array
     */
    protected array $classes = [];

    private int $currentXmlLine;

    protected function configure()
    {
        $this
            ->setName('classes-builder')
            ->setDescription('Build Tags classes from exiftool documentation.')
            ->addOption('with-mwg', '', null, 'Include MWG tags')
            ->addOption("lng", null, InputOption::VALUE_OPTIONAL | InputOption::VALUE_IS_ARRAY, 'Wanted lng(s) for tag descriptions', [])
            ;

        return $this;
    }

    /**
     * @throws Exception
     */
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $start = microtime(true);

        $this->input = $input;
        $this->output = $output;

        $this->output->write('Dumping Exiftool Dictionnary... ');

        $logger = new Logger('Builder');
        $logger->pushHandler(new NullHandler());

        if ($input->getOption('verbose')) {
            $logger->pushHandler(new StreamHandler('php://stdout'));
        }

        $dumper = new InformationDumper(new Exiftool($logger));

        $options = [];
        if ($input->getOption('with-mwg')) {
            $options[] = InformationDumper::LISTOPTION_MWG;
        }

        $dump = $dumper->listDatas(InformationDumper::LISTTYPE_SUPPORTED_XML, $options);

        $this->output->writeln('Done !');


        $this->output->writeln('Erasing previous files... ');
        try {
            @system('rm -R ' . __DIR__ . '/../../Driver/TagGroup/*');
        }
        catch (\Exception $e) {
            // no-op
        }

        $this->output->writeln('Generating classes... ');

        $this->extractDump($dump, $input->getOption('lng'));

        $this->output->writeln(
            sprintf(
                'Generated in %d seconds (%d Mb)'
                , (microtime(true) - $start), memory_get_peak_usage() >> 20
            )
        );

        return 0;
    }


    protected function getPhpType(string $type): ?string
    {
        /**
         * Some of these types are described here:
         * http://trac.greenstone.org/browser/main/trunk/greenstone2/perllib/cpan/Image/ExifTool/README
         * http://cpansearch.perl.org/src/EXIFTOOL/Image-ExifTool-9.13/lib/Image/ExifTool/PICT.pm
         */
        switch ($type) {
            # Formats defined in the wiki
            case 'int8s':
            case 'int8u':
            case 'int16s':
            case 'int16u':
            case 'int16uRev':
            case 'int32s':
            case 'int32u':
            case 'int32uRev':
            case 'int64s':
            case 'int64u':
            case 'fixed16s':
            case 'fixed32s':
            case 'fixed32u':
            case 'var_int16u':

                # Apple data structures in PICT images
            case 'Int8uText':
            case 'Int8u2Text':
            case 'Int16Data':
            case 'Int32uData':

                # Source unknown ...
            case 'var_int8u':
            case 'integer':
            case 'digits':
            case 'signed':
            case 'unsigned':
                return 'int';


            # Formats defined in the wiki
            case 'float':
            case 'double':
            case 'extended':
            case 'rational32s':
            case 'rational32u':
            case 'rational64s':
            case 'rational64u':
            case 'rational':
            case 'real':
                return 'float';


            # Formats defined in the wiki
            case 'undef':
            case 'binary':

                # Source unknown ...
            case 'var_ue7':
            case 'struct':
            case 'var_undef':
            case '?':
            case 'null':
            case 'unknown':
            case 'Unknown':
                return null;


            # Formats defined in the wiki
            case 'string':
            case 'pstring':
            case 'var_string':
            case 'var_pstr32':
            case 'var_ustr32':
            case 'unicode':
            case 'Unicode':
            case 'GUID':
            case 'vt_filetime':

                # Apple data structures in PICT images
            case 'Arc':
            case 'BitsRect#': # version-depended
            case 'BitsRgn#': # version-depended
            case 'CompressedQuickTime':
            case 'DirectBitsRect':
            case 'DirectBitsRgn':
            case 'FontName':
            case 'PixPat':
            case 'Point':
            case 'PointText':
            case 'Polygon':
            case 'Rect':
            case 'RGBColor':
            case 'Rgn':
            case 'ShortLine':

                # Source unknown ...
            case 'lang-alt':
            case 'resize':
            case 'utf8':
            case '2':   // ???
                return 'string';


            # Source unknown ...
            case 'date':
                return 'date';

            # Source unknown ...
            case 'boolean':
                return 'boolean';

            # changed to "mixed" when types conflicts ...
            case 'mixed':
                return 'mixed';

            default:
                $this->output->writeln("");
                $this->output->writeln(sprintf("No type found for %s @%s", $type, $this->currentXmlLine));
                break;
        }

        return '?';
    }

    /**
     * @throws Exception
     */
    protected function extractDump(DOMDocument $dump, array $lngs)
    {
        $nGroups = 0;
        $nTags = 0;

        /** @var tagGroupBuilder[] $tagGroupBuilders */
        $tagGroupBuilders = [];
        $group_ids = [];     // to check group_id belongs to only one class

        $crawler = new Crawler();
        $crawler->addDocument($dump);

        $tag_count = null;
        if ($this->output->getVerbosity() >= OutputInterface::VERBOSITY_QUIET) {
            $this->output->write('Compute tag count...');
            $tag_count = count($crawler->filter('table>tag'));
            $this->output->writeln(sprintf('%d', $tag_count));
        }

        if ($this->output->getVerbosity() < OutputInterface::VERBOSITY_VERBOSE) {
            if (!$this->getHelperSet()->has('progress')) {
                $this->progress = new ProgressBar($this->output);
                $this->progress->start($tag_count);
            }
            else {
                $this->progress = $this->getHelper('progress');
                $this->progress->start($tag_count);
            }
        }

        foreach ($crawler->filter('table') as $table) {
            $table_crawler = new Crawler();
            $table_crawler->addNode($table);

            $table_g0 = $table_crawler->attr('g0');
            $table_g1 = $table_crawler->attr('g1');
            $table_g2 = $table_crawler->attr('g2');
            $table_name = $table_crawler->attr('name');

            $tags = $table_crawler->filter('tag');

            /** @var DOMElement $tag */
            foreach ($tags as $tag) {

                $this->currentXmlLine = $tag->getLineNo();

                $tag_crawler = new Crawler();
                $tag_crawler->addNode($tag);

                $tag_name = $tag_crawler->attr('name');
                if(strtoupper($tag_name) === "RESERVED") {
                    continue;
                }

                $tag_g0 = $tag_crawler->attr('g0');
                $tag_g1 = $tag_crawler->attr('g1');
                $tag_g2 = $tag_crawler->attr('g2');
                if($tag_g0 === '*' || $tag_g1 === '*' || $tag_g2 === '*') {
                    continue;
                }

                $tag_id = $tag_crawler->attr('id');
                if (is_null($tag_id)) {
                    $this->output->writeln(sprintf("TagGroup has no id."));
                    continue;
                }
                $tag_type = $tag_crawler->attr('type');
                $tag_index = $tag_crawler->attr('index');
                $tag_count = $tag_crawler->attr('count');
                $tag_writable = $tag_crawler->attr('writable');
                $writable = strtoupper($tag_writable) === "TRUE";

                $g0 = $tag_g0 ?: $table_g0;
                $g1 = $tag_g1 ?: $table_g1;
                $g2 = $tag_g2 ?: $table_g2;
                /*

                if (!is_null($tag_g0)) {
                    $extra['local_g0'] = $tag_g0;
                }

                if (!is_null($tag_g1) && !in_array($tag_g1, ['MakerNotes', 'Chapter#'])) {
                    $group_name = $tag_g1;
                    $extra['local_g1'] = $tag_g1;
                }
                else {
                    $group_name = $table_g1;
                }

                if (!is_null($tag_g2)) {
                    $extra['local_g2'] = $tag_g2;
                }
                */

                $tag_flags = $tag_crawler->attr('flags');
                $flags = explode(',', strtolower($tag_flags));

//                $namespace = $table_name . '\\ID' . $tag_id;
//                if (!is_null($tag_index)) {
//                    $namespace .= "\\v" . $tag_index;
//                }
//                $namespace = str_replace('::', '\\', $namespace);

                // first level namespace
                // $tn = explode('::', $table_name);
                // $prefix_ns = self::generateClassname($tn[0]);

//                $prefix_ns = self::generateClassname($g1);
                $prefix_ns = '';
//                $prefix_ns = self::generateClassname($table_name);
//                $prefix_ns = self::generateClassname(strtoupper($tag_name[0]));
//                $namespace = self::generateClassname("ID-" . $tag_id);
                $namespace = self::generateClassname($g1);
                $classname = self::generateClassname($tag_name);

//                $fq_classname = $prefix_ns . '\\' .  $namespace . '\\' . $classname;   // fully qualified classname
                $fq_classname = $namespace . '\\' . $classname;   // fully qualified classname

                // tags with the same id+name reference the same "data" from a client point of vue.
                // so we group those into a tag group
//                $group_id = "ID-" . $tag_id . ":" . $tag_name;
                $group_id = $g1 . ":" . $tag_name;
                if (!array_key_exists($fq_classname, $tagGroupBuilders)) {

                    // check that our dispatching method does not build 2 classes for one
                    // this is NOW impossible (same key), but useful with other dispatch algo.
                    if(array_key_exists($group_id, $group_ids)) {
                        $this->output->writeln(sprintf("! GROUP_ID \"%s\" from \"%s\" already exists in \"%s\"", $group_id, $fq_classname, $group_ids[$group_id]));
                    }
                    else {
                        $group_ids[$group_id] = $fq_classname;
                    }

                    if ($this->output->getVerbosity() > OutputInterface::VERBOSITY_VERBOSE) {
                        $this->output->writeln(sprintf("building \"%s\"", $fq_classname));
                    }
                    $nGroups++;

                    $tagGroupBuilders[$fq_classname] = new tagGroupBuilder(
                        $this->input,      // for debug
                        $this->output,      // for debug
                        //"TagGroup\\" . $prefix_ns . "\\". $namespace,
                        "TagGroup\\" .  $namespace,
                        // "TagGroup\\" . $namespace,
                        $classname,
                        // consts
                        [
                        ],
                        // tagProperties
                        [
                            'id' => $group_id,  // used as full tagname for write ops
                            'name' => $tag_name,
//                            'type' => $tag_type,
                            // 'php_type' => $php_type,
                            // 'tags' => [],
                        ],
                        'AbstractTagGroup',
                        // uses
                        [
                            'JMS\\Serializer\\Annotation\\ExclusionPolicy',
                            '\\PHPExiftool\\Driver\\AbstractTagGroup'
                        ],
                        // annotations
                        [
                            '@ExclusionPolicy("all")'
                        ]
                    );
                }

                $tagComments = [
                    'table_name' => $table_name,
                    'line' => $tag->getLineNo(),
                    'type' => $tag_type,
                    'writable' => $tag_writable,
                    'count' => $tag_count,
                    'flags' => $tag_flags,
                ];

                $tagProperties = [
                    //'UKey'        => $fq_classname,
                    'id'          => $table_name . '.' . $group_id,
                ];


                // keep "descriptions" on a per-tag level (no high level reconcilaiation)
                $tagDescriptions = [];
                foreach($tag_crawler->filter('desc') as $desc) {
                    $descCrawler = new Crawler($desc);
                    $lng = $descCrawler->attr('lang');
                    if(in_array($lng, $lngs)) {
                        $tagDescriptions[$lng] = $descCrawler->text();
                    }
                }
                $tagProperties['desc'] = $tagDescriptions;


                /*  values is a mess with conflicting sense... don't try to use for now
                 *
                // add "suggested values" to the top-level by merging values of each tag
                if (count($tag_crawler->filter('values')) > 0) {
                    $values = [];

                    $values_tag = $tag_crawler->filter('values')->first();

                    $Keys = $values_tag->filter('key');

                    foreach ($Keys as $Key) {
                        $KeyCrawler = new Crawler();
                        $KeyCrawler->addNode($Key);

                        $Id = $KeyCrawler->attr('id');
                        $Label = $KeyCrawler->filter('val[lang="en"]')->first()->text();

                        $values[$Id] = ['Id' => $Id, 'Label' => $Label];
                    }

                    $tagProperties['Values'] = $values;
                }
                */

                // now add the tag to the group
                $tagGroupBuilders[$fq_classname]->addTag(
                    $tagComments,
                    $tagProperties
                );

                // and try to reconciliate some attributes

                // set a type and a php type at class level (will try to reconciliate)
                $tagGroupBuilders[$fq_classname]->setType($tag_type, $this->getPhpType($tag_type));

                // set a writable flag at class level (will try to reconciliate)
                $tagGroupBuilders[$fq_classname]->setWritable($writable);

                // set a "count" attribute at class level (will try to reconciliate)
                if(!is_null($tag_count)) {
                    $tagGroupBuilders[$fq_classname]->setCount((int)$tag_count);
                }

                // set a flag (named bool) attribute at class level (will try to reconciliate)
                $tagGroupBuilders[$fq_classname]->setFlags($flags);

                // set a common description (by lng) (will try to reconciliate)
                $tagGroupBuilders[$fq_classname]->setDescription($tagDescriptions);

                /*
                // set a description at class level (will try to reconciliate)
                / ** @var DOMElement $desc * /
                foreach($tag_crawler->filter('desc') as $desc) {
                    $lng = $desc->getAttribute('lang');
                    $tagGroupBuilders[$fq_classname]->addDescription($lng, (string) $desc->textContent);
                }
                */

                $nTags++;

                if($this->progress) {
                    $this->progress->advance();
                }
            }
        }

        if($this->progress) {
            $this->progress->finish();
        }

        $this->output->writeln(sprintf("Writing %d classes... ", $nGroups));

        if($this->progress) {
            $this->progress->start($nGroups);
        }
        foreach ($tagGroupBuilders as $fq_classname => $builder) {
            $builder->write();
            if($this->progress) {
                $this->progress->advance();
            }
        }
        if($this->progress) {
            $this->progress->finish();
        }

        $this->output->writeln(sprintf("%d classes covers %d tags.", $nGroups, $nTags));

        $this->output->writeln(sprintf("Writing index Table"));
        $index = array_keys($tagGroupBuilders);
        sort($index, SORT_NATURAL + SORT_FLAG_CASE);
        $file = __DIR__ . '/../../Driver/TagGroup/index.php';
        file_put_contents($file, "<?php\nreturn " . var_export($index, true) . ";\n");
    }

    protected static array $reservedNames = [
        'abstract',
        'and',
        'array',
        'as',
        'bool',
        'break',
        'case',
        'catch',
        'class',
        'clone',
        'const',
        'continue',
        'declare',
        'default',
        'do',
        'else',
        'elseif',
        'empty',
        'enddeclare',
        'endfor',
        'endforeach',
        'endif',
        'endswitch',
        'endwhile',
        'extends',
        'false',
        'final',
        'float',
        'for',
        'foreach',
        'function',
        'function',
        'global',
        'goto',
        'if',
        'implements',
        'instanceof',
        'int',
        'interface',
        'mixed',
        'namespace',
        'new',
        'null',
        'numeric',
        'object',
        'old_function',
        'or',
        'private',
        'protected',
        'public',
        'resource',
        'static',
        'string',
        'switch',
        'throw',
        'true',
        'try',
        'use',
        'var',
        'void',
        'while',
        'xor',
        'yield',
    ];

    /**
     *
     * @param string $name
     * @return string
     */
    public static function generateClassname(string $name): string
    {
        $retval = preg_replace('/[\\W_]+/i', '_', $name);

        if (in_array(strtolower($retval), static::$reservedNames)) {
            $retval = $retval . '0';
        }

        return $retval;
    }

    public static function generateNamespace(string $namespace): string
    {
        $values = explode('\\', $namespace);

        foreach ($values as $key => $value) {
            $values[$key] = ucfirst(self::generateClassname($value));
        }

        return implode('\\', $values);
    }
}
