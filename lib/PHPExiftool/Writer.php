<?php

/**
 * This file is part of the PHPExiftool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool;

use Exception;
use PHPExiftool\Driver\Metadata\Metadata;
use PHPExiftool\Driver\Metadata\MetadataBag;
use PHPExiftool\Exception\InvalidArgumentException;
use Psr\Log\LoggerInterface;

/**
 * Exiftool Metadatas Writer, it will be used to write metadatas in files
 *
 * Example usage :
 *
 *      $Writer = new Writer();
 *
 *      $metadatas = new MetadataBag();
 *      $metadata->add(new Metadata(new IPTC\ObjectName(), Value\Mono('Super title !')));
 *
 *      //writes the metadatas to the file
 *      $Writer->writes('image.jpg', $metadatas);
 *
 *      //writes the metadatas to image_copied.jpg
 *      $Writer->writes('image.jpg', $metadatas, 'image_copied.jpg');
 *
 * @todo implement remove partial content
 * @todo implement binary thumbnails
 * @todo implements stay_open
 */
class Writer
{
    const MODE_IPTC2XMP = 1;
    const MODE_IPTC2EXIF = 2;
    const MODE_EXIF2IPTC = 4;
    const MODE_EXIF2XMP = 8;
    const MODE_PDF2XMP = 16;
    const MODE_XMP2PDF = 32;
    const MODE_GPS2XMP = 64;
    const MODE_XMP2EXIF = 128;
    const MODE_XMP2IPTC = 256;
    const MODE_XMP2GPS = 512;
    const MODULE_MWG = 1;

    protected int $mode;
    protected int $modules;
    protected bool $erase = false;
    protected Exiftool $exiftool;
    private bool $eraseProfile = false;
    protected int $timeout = 60;

    protected function __construct(Exiftool $exiftool)
    {
        $this->exiftool = $exiftool;
        $this->reset();
    }

    public static function create(Exiftool $exiftool)
    {
        return new self($exiftool);
    }

    public function setTimeout($timeout): self
    {
        $this->timeout = $timeout;

        return $this;
    }

    public function reset(): self
    {
        $this->mode = 0;
        $this->modules = 0;
        $this->erase = false;
        $this->eraseProfile = false;

        return $this;
    }

    /**
     * Enable / Disable modes
     *
     * @param integer $mode   One of the self::MODE_*
     * @param Boolean $active Enable or disable the mode
     * @return Writer
     */
    public function setMode(int $mode, bool $active): self
    {
        if ($active) {
            $this->mode |= $mode;
        } else {
            $this->mode = $this->mode & ~$mode;
        }

        return $this;
    }

    /**
     * Return true if the mode is enabled
     *
     * @param integer $mode One of the self::MODE_*
     * @return Boolean True if the mode is enabled
     */
    public function isMode(int $mode): bool
    {
        return (boolean) ($this->mode & $mode);
    }

    /**
     * Enable / disable module.
     * There's currently only one module self::MODULE_MWG
     *
     * @param integer $module One of the self::MODULE_*
     * @param Boolean $active Enable or disable the module
     * @return Writer
     */
    public function setModule(int $module, bool $active): self
    {
        if ($active) {
            $this->modules |= $module;
        } else {
            $this->modules = $this->modules & ~$module;
        }

        return $this;
    }

    /**
     * Return true if the module is enabled
     *
     * @param integer $module
     * @return boolean
     */
    public function hasModule(int $module): bool
    {
        return (boolean) ($this->modules & $module);
    }

    /**
     * If set to true, erase all metadatas before write
     *
     * @param Boolean $boolean            Whether to erase metadata or not before writing.
     * @param Boolean $maintainICCProfile Whether to maintain or not ICC Profile in case of erasing metadata.
     */
    public function erase(bool $boolean, bool $maintainICCProfile = false)
    {
        $this->erase = $boolean;
        $this->eraseProfile = !$maintainICCProfile;
    }

    /**
     * Copy metadatas from one file to another.
     * Both files must exist.
     *
     * @param string $file_src  The input file
     * @param string $file_dest The input file
     *
     * @return int the number "write" operations, or null if exiftool returned nothing we understand
     *         event for no-op (file unchanged), 1 is returned so the caller does not think the command failed.
     *
     * @throws InvalidArgumentException
     * @throws Exception
     */
    public function copy(string $file_src, string $file_dest): ?int
    {
        if ( ! file_exists($file_src)) {
            throw new InvalidArgumentException(sprintf('src %s does not exists', $file_src));
        }
        if ( ! file_exists($file_dest)) {
            throw new InvalidArgumentException(sprintf('dest %s does not exists', $file_dest));
        }
        $command = [
            '-overwrite_original_in_place',
            '-tagsFromFile',
            $file_src,
            $file_dest
        ];
        $ret = $this->exiftool->executeCommand($command, $this->timeout);

        // exiftool may print (return) a bunch of lines, even for a single command
        // e.g. deleting tags of a file with NO tags may return 2 lines...
        // | exiftool -all:all= notags.jpg
        // |     0 image files updated
        // |     1 image files unchanged
        // ... which is NOT an error,
        // so it's not easy to decide from the output when something went REALLY wrong
        $n_unchanged = $n_changed = 0;
        foreach(explode("\n", $ret) as $line) {
            if (preg_match("/(\\d+) image files (copied|created|updated|unchanged)/", $line, $matches)) {
                if($matches[2] == 'unchanged') {
                    $n_unchanged += (int)($matches[1]);
                }
                else {
                    $n_changed += (int)($matches[1]);
                }
            }
        }
        // first chance, changes happened
        if($n_changed > 0) {
            // return $n_changed;
            return 1;   // so tests are ok
        }
        // second chance, at least one no-op happened
        if($n_unchanged > 0) {
            return 1;
        }
        // too bad
        return null;
    }

    /**
     * Writes metadatas to the file. If a destination is provided, original file
     * is not modified.
     *
     * @param string $file              The input file
     * @param MetadataBag $metadatas    A bag of metadatas
     * @param string|null $destination  The output file
     * @param array       $resolutionXY The dpi resolution array(xresolution, yresolution)
     *
     * @return int the number "write" operations, or null if exiftool returned nothing we understand
     *         even for no-op (file unchanged), 1 is returned so the caller does not think the command failed.
     *
     * @throws InvalidArgumentException|Exception
     */
    public function write(string $file, MetadataBag $metadatas, string $destination = null, array $resolutionXY = array()): ?int
    {
        if ( ! file_exists($file)) {
            throw new InvalidArgumentException(sprintf('%s does not exists', $file));
        }

        // if the -o file exists, exiftool prints an error
        if($destination) {
            @unlink($destination);
            if (file_exists($destination)) {
                throw new InvalidArgumentException(sprintf('%s cannot be replaced', $destination));
            }
        }

        $common_args = [
            '-ignoreMinorErrors',
            '-preserve',
            '-charset UTF8'
        ];

        $commands_groups = [];

        if ($this->erase) {
            /**
             * if erase is specfied, we MUST start by erasing datas before doing
             * anything else.
             */
            $commands = ['-all:all='];
            if(!$this->eraseProfile) {
                $commands[] = '--icc_profile:all';
            }
            $commands_groups[] = $commands;
        }

        if(count($resolutionXY) == 2 && is_int(current($resolutionXY)) && is_int(end($resolutionXY)) ){
            reset($resolutionXY);
            $commands_groups[] = [
                '-xresolution=' . current($resolutionXY),
                '-yresolution=' . end($resolutionXY)
            ];
        }

        if(count($metadatas) > 0) {
            $commands_groups[] = $this->addMetadatasArg($metadatas);
            $common_args[] = '-codedcharacterset=utf8';
        }

        $commands_groups[] = $this->getSyncCommand();

        if(count($commands_groups) == 0) {
            // nothing to do...
            if($destination) {
                // ... but a destination
                $commands_groups[] = [];   // empty command so exiftool will copy the file for us
            }
            else {
                // really nothing to do = 0 ops
                return 1;       // considered as "unchanged"
            }
        }

        if($destination) {
            foreach($commands_groups as $i=>$commands) {
                if($i==0) {
                    // the FIRST command will -o the destination
                    $commands_groups[0][] = $file;
                    $commands_groups[0][] = '-o';
                    $commands_groups[0][] = $destination;
                }
                else {
                    // then the next commands will work on the destination
                    $commands_groups[$i][] = '-overwrite_original_in_place';
                    $commands_groups[$i][] = $destination;
                }
            }
        }
        else {
            // every command (even a single one) works on the original file
            $common_args[] = '-overwrite_original_in_place ';
            $common_args[] = $file;
        }


        if(count($commands_groups) > 1) {
            // really need "-common_args" only if many commands are chained
            // nb: the file argument CAN be into -common_args
            array_unshift($common_args, '-common_args');
        }

        $commands = [];
        foreach ($commands_groups as $i => $cg) {
            if($i > 0) {
                $commands[] = '-execute';
            }
            foreach($cg as $c) {
                $commands[] = $c;
            }
        }
        foreach ($common_args as $a) {
            $commands[] = $a;
        }

        $ret = $this->exiftool->executeCommand($commands, $this->timeout);

        // exiftool may print (return) a bunch of lines, even for a single command
        // e.g. deleting tags of a file with NO tags may return 2 lines...
        // | exiftool -all:all= notags.jpg
        // |     0 image files updated
        // |     1 image files unchanged
        // ... which is NOT an error,
        // so it's not easy to decide from the output when something went REALLY wrong
        $n_unchanged = $n_changed = 0;
        foreach(explode("\n", $ret) as $line) {
            if (preg_match("/(\\d+) image files (copied|created|updated|unchanged)/", $line, $matches)) {
                if($matches[2] == 'unchanged') {
                    $n_unchanged += (int)($matches[1]);
                }
                else {
                    $n_changed += (int)($matches[1]);
                }
            }
        }
        // first chance, changes happened
        if($n_changed > 0) {
            // return $n_changed;	// nice but breaks backward compatibility
            return 1;   		// better, backward compatible and tests are ok
        }
        // second chance, at least one no-op happened
        if($n_unchanged > 0) {
            return 1;
        }
        // too bad
        return null;
    }

    /**
     * Computes modes, modules and metadatas to a single commandline
     *
     * @param MetadataBag $metadatas A Bag of metadatas
     *
     * @return array parts of the command
     */
    protected function addMetadatasArg(MetadataBag $metadatas): array
    {
        $commands = [];

        if ($this->modules & self::MODULE_MWG) {
            $commands[] = '-use';
            $commands[] = 'MWG';
        }

        /** @var Metadata $metadata */
        foreach ($metadatas as $metadata) {
            foreach ($metadata->getValue()->asArray() as $value) {
                $commands[] = '-' . $metadata->getTagGroup()->getWriteKey() . '=' . $value;
            }
        }

        return $commands;
    }

    protected function getSyncCommand(): array
    {
        $syncCommands = [];

        $availableArgs = array(
            self::MODE_IPTC2XMP  => 'iptc2xmp.args',
            self::MODE_IPTC2EXIF => 'iptc2exif.args',
            self::MODE_EXIF2IPTC => 'exif2iptc.args',
            self::MODE_EXIF2XMP  => 'exif2xmp.args',
            self::MODE_PDF2XMP   => 'pdf2xmp.args',
            self::MODE_XMP2PDF   => 'xmp2pdf.args',
            self::MODE_GPS2XMP   => 'gps2xmp.args',
            self::MODE_XMP2EXIF  => 'xmp2exif.args',
            self::MODE_XMP2IPTC  => 'xmp2iptc.args',
            self::MODE_XMP2GPS   => 'xmp2gps.args',
        );

        foreach ($availableArgs as $arg => $cmd) {
            if ($this->mode & $arg) {
                $syncCommands[] = '-@';
                $syncCommands[] = $cmd;
            }
        }

        return $syncCommands;
    }
}

