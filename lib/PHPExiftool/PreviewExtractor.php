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

use DirectoryIterator;
use Exception;
use PHPExiftool\Exception\LogicException;
use PHPExiftool\Exception\RuntimeException;

class PreviewExtractor // extends Exiftool
{
    private $exiftool;

    public function __construct(Exiftool $exiftool)
    {
        // parent::__construct($exiftool->logger, $exiftool->binaryPath);
        $this->exiftool = $exiftool;
    }

    public function extract($pathfile, $outputDir): DirectoryIterator
    {
        if ( ! file_exists($pathfile)) {
            throw new LogicException(sprintf('%s does not exists', $pathfile));
        }

        if ( ! is_dir($outputDir) || ! is_writable($outputDir)) {
            throw new LogicException(sprintf('%s is not writable', $outputDir));
        }

//        $command = "-if " . escapeshellarg('$photoshopthumbnail') . " -b -PhotoshopThumbnail "
//            . "-w " . escapeshellarg(realpath($outputDir) . '/PhotoshopThumbnail%c.jpg') . " -execute "
//            . "-if " . escapeshellarg('$jpgfromraw') . " -b -jpgfromraw "
//            . "-w " . escapeshellarg(realpath($outputDir) . '/JpgFromRaw%c.jpg') . " -execute "
//            . "-if " . escapeshellarg('$previewimage') . " -b -previewimage "
//            . "-w " . escapeshellarg(realpath($outputDir) . '/PreviewImage%c.jpg') . " -execute "
//            . "-if " . escapeshellarg('$xmp:pageimage') . " -b -xmp:pageimage "
//            . "-w " . escapeshellarg(realpath($outputDir) . '/XmpPageimage%c.jpg') . " "
//            . "-common_args -q -m " . $pathfile;

        $command = [
            '-if',
            '$photoshopthumbnail',
            '-b',
            '-PhotoshopThumbnail',
            '-w',
            realpath($outputDir) . '/PhotoshopThumbnail%c.jpg',
            '-execute',
            '-if',
            '$jpgfromraw',
            '-b',
            '-jpgfromraw',
            '-w',
            realpath($outputDir) . '/JpgFromRaw%c.jpg',
            '-execute',
            '-if',
            '$previewimage',
            '-b',
            '-previewimage',
            '-w',
            realpath($outputDir) . '/PreviewImage%c.jpg',
            '-execute',
            '-if',
            '$xmp:pageimage',
            '-b',
            '-xmp:pageimage',
            '-w',
            realpath($outputDir) . '/XmpPageimage%c.jpg',
            '-common_args',
            '-q',
            '-m',
            $pathfile
        ];

        try {
            $this->exiftool->executeCommand($command);
        }
        catch (RuntimeException | Exception $e) {
            // no-op
        }

        return new DirectoryIterator($outputDir);
    }
}
