<?php
/**
 * This file is part of the PHPExiftool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace lib\PHPExiftool\Test;

use DirectoryIterator;
use PHPExiftool\PreviewExtractor;
use PHPExiftool\Exception\LogicException;
use PHPExiftool\Exiftool;
use PHPUnit\Framework\TestCase;

abstract class AbstractPreviewExtractorTest extends TestCase
{
    /**
     * @covers \PHPExiftool\PreviewExtractor::extract
     */
    public function testExtract(): void
    {
        $extractor = new PreviewExtractor($this->getExiftool());

        $tmpDir = sys_get_temp_dir() . '/tests' . mt_rand(10000, 99999);

        mkdir($tmpDir);

        $files = $extractor->extract(__DIR__ . '/../../../files/ExifTool.jpg', $tmpDir);

        $this->assertInstanceOf(DirectoryIterator::class, $files);

        $n = 0;
        $unlinks = array();

        foreach ($files as $file) {
            if ($file->isDot() || $file->isDir()) {
                continue;
            }

            $unlinks[] = $file->getPathname();
            $n ++;
        }

        foreach ($unlinks as $u) {
            unlink($u);
        }

        $this->assertEquals(1, $n);
    }

    public function testExtractWrongFile(): void
    {
        $extractor = new PreviewExtractor($this->getExiftool());

        $tmpDir = sys_get_temp_dir() . '/tests' . mt_rand(10000, 99999);

        $this->expectException(LogicException::class);
        $extractor->extract(__DIR__ . '/ExifTool.jpg', $tmpDir);
    }

    public function testExtractWrongDir(): void
    {
        $extractor = new PreviewExtractor($this->getExiftool());

        $tmpDir = sys_get_temp_dir() . '/tests' . mt_rand(10000, 99999);

        $this->expectException(LogicException::class);
        $extractor->extract(__DIR__ . '/../../../files/ExifTool.jpg', $tmpDir);
    }

    abstract protected function getExiftool(): Exiftool;
}
