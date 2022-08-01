<?php
/**
 * This file is part of the PHPExiftool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Test\Driver\Metadata;

use PHPExiftool\Driver\AbstractTag;
use PHPExiftool\Driver\AbstractTagGroup;
use PHPExiftool\Driver\Value\Mono;
use PHPExiftool\Driver\Metadata\Metadata;

class MetadataTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Metadata
     */
    protected $object;
    protected $tag;
    protected $value;

    /**
     * @covers \PHPExiftool\Driver\Metadata\Metadata::__construct
     */
    protected function setUp()
    {
        $this->tag = new TagTest();
        $this->value = new Mono('valeur');
        $this->object = new Metadata(new TagTest, $this->value, new \SplFileInfo(__FILE__));
    }

    /**
     * @covers \PHPExiftool\Driver\Metadata\Metadata::getTagGroup
     */
    public function testGetTag()
    {
        $this->assertEquals($this->object->getTagGroup(), $this->tag);
    }

    /**
     * @covers \PHPExiftool\Driver\Metadata\Metadata::getValue
     */
    public function testGetValue()
    {
        $this->assertEquals($this->object->getValue(), $this->value);
    }
}

class TagTest extends AbstractTagGroup
{

}
