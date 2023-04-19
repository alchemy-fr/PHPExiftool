<?php
/**
 * This file is part of the PHPExiftool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace lib\PHPExiftool\Test\Driver;

use PHPExiftool\Driver\HelperInterface;
use PHPExiftool\Driver\TagGroupFactory;
use PHPExiftool\PHPExiftool;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Finder\Finder;
use PHPExiftool\Driver\TagGroupInterface;


class TagGroupTest extends TestCase {

    /**
     * @var TagGroupInterface
     */
    protected TagGroupInterface $object;

    /**
     * @covers AbstractTag::getDescription
     * @covers AbstractTag::getGroupName
     * @covers AbstractTag::getName
     * @covers AbstractTag::getTagname
     * @covers AbstractTag::getId
     * @covers AbstractTag::getValues
     * @covers AbstractTag::isMulti
     * @covers AbstractTag::isWritable
     * @covers AbstractTag::isBinary
     */
    public function testConsistency()
    {
        $PHPExiftool = new PHPExiftool("/tmp");

        /** @var HelperInterface $helper */
        $helper = $PHPExiftool->getFactory()->getHelper();

        //return;
        $finder = new Finder();
        $finder->files()->in(array('/tmp/TagGroup/'));

        $n = 0;
        foreach ($finder as $file) {
            if($file->getFilename() === "Helper.php") {
                continue;
            }
            $n++;

            $tagName =
                    str_replace(
                            '/', ':', $file->getRelativePath() . '/' . $file->getFilenameWithoutExtension()
                    );

            $tag = TagGroupFactory::getFromRDFTagname("/tmp", $tagName);

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

        self::assertEquals(count($helper->getIndex()), $n);
    }

}
