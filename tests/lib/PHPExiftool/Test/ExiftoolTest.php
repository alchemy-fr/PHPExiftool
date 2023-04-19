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

use Exception;
use Monolog\Logger;
use Monolog\Handler\NullHandler;
use PHPExiftool\Exception\RuntimeException;
use PHPExiftool\Exiftool;
use lib\PHPExiftool;
use PHPUnit\Framework\TestCase;

class ExiftoolTest extends TestCase
{

    /**
     * @covers PHPExiftool\Exiftool::executeCommand
     * @throws Exception
     */
    public function testExecuteCommand()
    {
        $exiftool = new Exiftool($this->getlogger());
        $this->assertRegExp('/\d+\.\d+/', $exiftool->executeCommand(['-ver']));
    }

    /**
     * @covers PHPExiftool\Exiftool::executeCommand
     * @covers PHPExiftool\Exception\RuntimeException
     * @throws Exception
     */
    public function testExecuteCommandFailed()
    {
        $this->expectException(RuntimeException::class);
        $exiftool = new Exiftool($this->getlogger());
        $exiftool->executeCommand(['-prout']);
    }

    private function getlogger(): Logger
    {
        $logger = new Logger('Tests');
        $logger->pushHandler(new NullHandler());

        return $logger;
    }
}

