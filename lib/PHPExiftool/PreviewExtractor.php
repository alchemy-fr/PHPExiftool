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

        $outputDir = realpath($outputDir);

        $command = [
            '-if',
            '$photoshopthumbnail',
            '-b',
            '-PhotoshopThumbnail',
            '-w',
            $outputDir . '/PhotoshopThumbnail%c.jpg',
            '-execute',
            '-if',
            '$jpgfromraw',
            '-b',
            '-jpgfromraw',
            '-w',
            $outputDir . '/JpgFromRaw%c.jpg',
            '-execute',
            '-if',
            '$previewimage',
            '-b',
            '-previewimage',
            '-w',
            $outputDir . '/PreviewImage%c.jpg',
            '-execute',
            '-if',
            '$xmp:pageimage',
            '-b',
            '-xmp:pageimage',
            '-w',
            $outputDir . '/XmpPageimage%c.jpg',
            '-common_args',
            '-q',
            '-m',
            $pathfile
        ];

        try {
            $this->exiftool->executeCommand($command);
        }
        catch (RuntimeException $e) {
            // exiftool exits with code 2 when the -if condition of the last command fails, even if other previews were written
            if ($e->getCode() !== 2) {
                throw $e;
            }
        }

        return new DirectoryIterator($outputDir);
    }
}
