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

use PHPExiftool\Driver\TagGroupFactory;
use PHPExiftool\Exception\TagUnknown;
use PHPUnit_Framework_TestCase;
// use PHPExiftool\Driver\TagGroup\IPTC\SupplementalCategories;

class TagGroupFactoryTest extends PHPUnit_Framework_TestCase
{
    protected TagGroupFactory $object;

    /**
     * @covers \PHPExiftool\Driver\TagGroupFactory::GetFromRDFTagname
     * @covers \PHPExiftool\Driver\TagGroupFactory::classnameFromTagname
     * @throws TagUnknown
     */
    public function testGetFromRDFTagname()
    {
        $tag = TagGroupFactory::getFromRDFTagname('IPTC:SupplementalCategories');
        $this->assertInstanceOf(\PHPExiftool\Driver\TagGroup\IPTC\SupplementalCategories::class, $tag);

        $tag = TagGroupFactory::getFromRDFTagname('XMP_exif:ApertureValue');
        $this->assertInstanceOf(\PHPExiftool\Driver\TagGroup\XMP_exif\ApertureValue::class, $tag);

        try {
            TagGroupFactory::getFromRDFTagname('XMP_exif:NonExistingTag');
            $this->fail('Should raise a TagUnknown exception');
        }
        catch (TagUnknown $e) {

        }
    }

    /**
     * @covers \PHPExiftool\Driver\TagGroupFactory::GetFromRDFTagname
     * @covers \PHPExiftool\Exception\TagUnknown
     *
     * @throws TagUnknown
     */
    public function testGetFromRDFTagnameFail()
    {
        $this->expectException(TagUnknown::class);
        TagGroupFactory::getFromRDFTagname('XMP_exif:NonExistingTag');
    }

    /**
     * @covers \PHPExiftool\Driver\TagGroupFactory::HasFromRDFTagname
     */
    public function testHasFromRDFTagname()
    {
        $this->assertTrue(TagGroupFactory::hasFromRDFTagname('IPTC:SupplementalCategories'));
        $this->assertFalse(TagGroupFactory::hasFromRDFTagname('XMP_exif:NonExistingTag'));
    }
}
