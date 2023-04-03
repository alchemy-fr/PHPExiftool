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

use PHPExiftool\Exception\DirectoryNotFoundException;
use PHPExiftool\Exception\EmptyCollectionException;
use PHPExiftool\Exception\LogicException;
use PHPExiftool\Exception\RuntimeException;
use PHPExiftool\PHPExiftool;
use PHPExiftool\Reader;
use PHPUnit_Framework_TestCase;
use Symfony\Component\Process\Process;



class PHPExiftoolTest extends \PHPUnit_Framework_TestCase {

    private ?PHPExiftool $PHPExiftool = null;
    protected static string $tmpDir = "";
    protected static bool $disableSymLinkTest = false;

    /**
     * @covers PHPExiftool::__construct
     */
    public function testRelativeClassesRootDirectory()
    {
        $this->expectException(DirectoryNotFoundException::class);
        new PHPExiftool("./relative_dir");
    }

    /**
     * @covers PHPExiftool::__construct
     */
    public function testBadClassesRootDirectory()
    {
        $this->expectException(DirectoryNotFoundException::class);
        new PHPExiftool("/non_existing_dir");
    }

}
