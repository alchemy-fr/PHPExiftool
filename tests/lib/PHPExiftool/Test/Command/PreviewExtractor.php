<?php
/**
 * This file is part of the PHPExiftool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace lib\PHPExiftool\Test\Command;

use lib\PHPExiftool\Test\AbstractPreviewExtractorTest;
use Monolog\Logger;
use Monolog\Handler\NullHandler;
use PHPExiftool\Exiftool;

class PreviewExtractor extends AbstractPreviewExtractorTest
{
    protected function getExiftool(): Exiftool
    {
        $logger = new Logger('Tests');
        $logger->pushHandler(new NullHandler());

        return new Exiftool($logger);
    }
}
