<?php
/**
 * This file is part of the PHPExiftool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Test;

use Exception;
use PHPExiftool\PHPExiftool;

class PHPExiftoolTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @covers PHPExiftool::tagGroupIdToClassname
     * @throws Exception
     */
    public function testTagGroupIdToClassname()
    {
        $this->assertSame('PHPExiftool\\Driver\\TagGroup\\XMP_xmp\\Author', PHPExiftool::tagGroupIdToClassname('XMP-xmp:Author'));
    }
}

