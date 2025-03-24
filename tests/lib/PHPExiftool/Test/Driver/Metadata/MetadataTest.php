<?php
/**
 * This file is part of the PHPExiftool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace lib\PHPExiftool\Test\Driver\Metadata;

use PHPExiftool\Driver\AbstractTagGroup;
use PHPExiftool\Driver\Value\Mono;
use PHPExiftool\Driver\Metadata\Metadata;
use PHPExiftool\Driver\Value\ValueInterface;
use PHPUnit\Framework\TestCase;

class MetadataTest extends TestCase
{
    protected Metadata $object;
    protected TagTest $tag;
    protected ValueInterface $value;

    /**
     * @covers Metadata::__construct
     */
    protected function setUp(): void
    {
        $this->tag = new TagTest();
        $this->value = new Mono('valeur');
        $this->object = new Metadata(new TagTest, $this->value, new \SplFileInfo(__FILE__));
    }

    /**
     * @covers Metadata::getTagGroup
     */
    public function testGetTag(): void
    {
        $this->assertEquals($this->object->getTagGroup(), $this->tag);
    }

    /**
     * @covers Metadata::getValue
     */
    public function testGetValue(): void
    {
        $this->assertEquals($this->object->getValue(), $this->value);
    }
}

class TagTest extends AbstractTagGroup
{

}
