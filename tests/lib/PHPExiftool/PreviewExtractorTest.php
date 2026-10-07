<?php
/**
 * This file is part of the PHPExiftool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace lib\PHPExiftool;

use PHPExiftool\Exception\RuntimeException;
use PHPExiftool\Exiftool;
use PHPExiftool\PreviewExtractor;
use PHPUnit\Framework\TestCase;
use Psr\Log\NullLogger;

class PreviewExtractorTest extends TestCase
{
    private string $outputDir;

    protected function setUp(): void
    {
        $this->outputDir = sys_get_temp_dir() . '/phpexiftool-previews-' . mt_rand(10000, 99999);
        mkdir($this->outputDir);
    }

    protected function tearDown(): void
    {
        foreach (glob($this->outputDir . '/*') as $file) {
            unlink($file);
        }
        rmdir($this->outputDir);
    }

    /**
     * @covers \PHPExiftool\PreviewExtractor::extract
     */
    public function testExtractIgnoresFailedConditions()
    {
        $extractor = new PreviewExtractor(new Exiftool(new NullLogger()));

        $files = [];
        foreach ($extractor->extract(__DIR__ . '/../../files/ExifTool.jpg', $this->outputDir) as $file) {
            if (!$file->isDot()) {
                $files[] = $file->getFilename();
            }
        }

        $this->assertEquals(['PreviewImage.jpg'], $files);
    }

    /**
     * @covers \PHPExiftool\PreviewExtractor::extract
     */
    public function testExtractKeepsExiftoolErrors()
    {
        $exiftool = $this->createMock(Exiftool::class);
        $exiftool->method('executeCommand')->willThrowException(new RuntimeException('exiftool failed', 1));

        $extractor = new PreviewExtractor($exiftool);

        $this->expectException(RuntimeException::class);
        $extractor->extract(__DIR__ . '/../../files/ExifTool.jpg', $this->outputDir);
    }
}
