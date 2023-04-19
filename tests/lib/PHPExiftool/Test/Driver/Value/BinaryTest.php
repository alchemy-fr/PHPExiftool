<?php
/**
 * This file is part of the PHPExiftool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace lib\PHPExiftool\Test\Driver\Value;

use PHPExiftool\Driver\Value\Binary;
use PHPExiftool\Driver\Value\ValueInterface;
use PHPExiftool\Exception\InvalidArgumentException;
use PHPUnit\Framework\TestCase;

class BinaryTest extends TestCase
{
    /**
     * @var Binary
     */
    protected $object;

    /**
     * @covers Binary::__construct
     */
    protected function setUp(): void
    {
        $this->object = new Binary('Binary');
    }

    /**
     * @covers Binary::getType
     */
    public function testGetType()
    {
        $this->assertEquals(ValueInterface::TYPE_BINARY, $this->object->getType());
    }

    /**
     * @covers Binary::asString
     */
    public function testAsString()
    {
        $this->assertEquals('Binary', $this->object->asString());
    }

    /**
     * @covers Binary::asBase64
     */
    public function testAsBase64()
    {
        $this->assertEquals(base64_encode('Binary'), $this->object->asBase64());
    }

    /**
     * @covers Binary::set
     */
    public function testSetValue()
    {
        $this->object->set('Daisy');
        $this->assertEquals('Daisy', $this->object->asString());
    }

    /**
     * @covers Binary::setBase64Value
     */
    public function testSetBase64Value()
    {
        $this->object->setBase64Value('UmlyaSBGaWZpIGV0IExvdWxvdQ==');
        $this->assertEquals('Riri Fifi et Loulou', $this->object->asString());
    }

    /**
     * @covers Binary::setBase64Value
     * @covers InvalidArgumentException
     */
    public function testSetWrongBase64Value()
    {
        $this->expectException(InvalidArgumentException::class);
        $this->object->setBase64Value('Riri Fifi et Loulou !');
    }

    /**
     * @covers Binary::loadFromBase64
     */
    public function testLoadFromBase64()
    {
        $object = Binary::loadFromBase64('VW5jbGUgU2Nyb29nZQ==');
        $this->assertEquals('Uncle Scrooge', $object->asString());
        $this->assertEquals('VW5jbGUgU2Nyb29nZQ==', $object->asBase64());
    }

    /**
     * @covers Binary::loadFromBase64
     * @covers InvalidArgumentException
     */
    public function testLoadFromWrongBase64()
    {
        $this->expectException(InvalidArgumentException::class);
        Binary::loadFromBase64('Uncle Scrooge !!!');
    }
}
