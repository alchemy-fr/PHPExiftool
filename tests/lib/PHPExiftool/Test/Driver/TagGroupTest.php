<?php
/**
 * This file is part of the PHPExiftool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Test\Driver;

use PHPExiftool\PHPExiftool;
use Symfony\Component\Finder\Finder;
use PHPExiftool\Driver\TagGroupInterface;
use PHPExiftool\Driver\TagGroup\Helper;

class TagGroupTest extends \PHPUnit_Framework_TestCase {

    /**
     * @var TagGroupInterface
     */
    protected TagGroupInterface $object;

    /**
     * @covers \PHPExiftool\Driver\AbstractTag::getDescription
     * @covers \PHPExiftool\Driver\AbstractTag::getGroupName
     * @covers \PHPExiftool\Driver\AbstractTag::getName
     * @covers \PHPExiftool\Driver\AbstractTag::getTagname
     * @covers \PHPExiftool\Driver\AbstractTag::getId
     * @covers \PHPExiftool\Driver\AbstractTag::getValues
     * @covers \PHPExiftool\Driver\AbstractTag::isMulti
     * @covers \PHPExiftool\Driver\AbstractTag::isWritable
     * @covers \PHPExiftool\Driver\AbstractTag::isBinary
     */
    public function testConsistency()
    {
        //return;
        $finder = new Finder();
        $finder->files()->in(array(__DIR__ . '/../../../../../lib/PHPExiftool/Driver/TagGroup/'));

        $n = 0;
        foreach ($finder as $file) {
            if($file->getFilename() === "Helper.php") {
                continue;
            }
            $n++;
            $classname = substr(
                    str_replace(
                            array(realpath(__DIR__ . '/../../../../../lib'), '/')
                            , array('', '\\')
                            , $file->getRealPath()
                    ), 0, -4);

            $tag = new $classname;

            /* @var TagGroupInterface $tag  */

            $this->assertTrue(is_scalar($tag->getId()));
            $this->assertTrue(is_scalar($tag->getName()));
            $this->assertTrue(is_scalar($tag->getDescription('en')));
            $this->assertTrue(is_bool($tag->isWritable()));
            $this->assertTrue(is_bool($tag->isBinary()));
            $this->assertTrue(is_bool($tag->isMulti()));
            $this->assertTrue(is_int($tag->getMaxLength()));
            // $this->assertTrue(is_scalar($tag->getGroupName()));
            // $this->assertTrue(is_scalar($tag->getTagname()));

//            if ($tag->getValues() !== null)
//                $this->assertTrue(is_array($tag->getValues()));
//
//            if ($tag->isMulti())
//                $this->assertTrue($tag->isMulti());
//            else
//                $this->assertFalse($tag->isMulti());
//
//            if ($tag->isWritable())
//                $this->assertTrue($tag->isWritable());
//            else
//                $this->assertFalse($tag->isWritable(), $tag->getTagname() . " is writable");
//
//            if ($tag->isBinary())
//                $this->assertTrue($tag->isBinary());
//            else
//                $this->assertFalse($tag->isBinary());

            unset($tag);
        }

        self::assertEquals(count(Helper::getIndex()), $n);
    }

}
