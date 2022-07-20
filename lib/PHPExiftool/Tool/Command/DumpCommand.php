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

use Exception;
use PHPExiftool\Driver\Metadata\Metadata;
use PHPExiftool\Reader;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;


/**
 *
 * @author      Romain Neutron - imprec@gmail.com
 * @license     http://opensource.org/licenses/MIT MIT
 */
class DumpCommand extends Command
{
    protected InputInterface $input;
    protected OutputInterface $output;

    /**
     *
     * @var array
     */
    protected array $classes = [];

    protected function configure()
    {
        $this
            ->setName('dump')
            ->setDescription('Dump metadata from a file')
            ->addArgument('file', InputArgument::REQUIRED, 'The file')

        ;

        return $this;
    }

    /**
     * @throws Exception
     */
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln("hello");

        $start = microtime(true);

        $this->input = $input;
        $this->output = $output;

        $logger = new \Symfony\Bridge\Monolog\Logger("PHPExiftool");
        $reader = Reader::create($logger);
        $reader->files($input->getArgument('file'));
        $metadataBag = $reader->files(__FILE__)->first();

        /**
         * @var Metadata $meta
         */
        foreach($metadataBag as $meta) {
            $tag = $meta->getTag();
            $output->writeln(sprintf("<info>%s</info> (name=\"%s\", phpType=\"%s\") ; %s", $tag->getId(), $tag->getName(), $tag->getPhpType(), $tag->getDescription('en')));
            $output->write($tag->isMulti() ? " multi" : " mono");
            $output->write($tag->isBinary() ? " binary" : "");
            $output->write($tag->isWritable() ? " writable" : " read-only");
            $output->writeln($tag->getMaxLength() !== 0 ? (" maxl=" . $tag->getMaxLength()) : "");

            $v = $meta->getValue();
            $output->writeln(sprintf(" value: \"%s\"", $v->asString()));
        }

        return 0;
    }

}
