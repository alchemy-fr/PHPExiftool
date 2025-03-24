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

use PHPExiftool\Driver\Value\Mono;
use PHPExiftool\Driver\Value\ValueInterface;
use PHPUnit\Framework\TestCase;

class MonoTest extends TestCase
{
    protected Mono $object;

    /**
     * @covers Mono::__construct
     */
    protected function setUp(): void
    {
        $this->object = new Mono('Hello !');
    }

    /**
     * @covers Mono::getType
     */
    public function testGetType(): void
    {
        $this->assertEquals(ValueInterface::TYPE_MONO, $this->object->getType());
    }

    /**
     * @covers Mono::asString
     */
    public function testAsString(): void
    {
        $this->assertEquals('Hello !', $this->object->asString());
    }

    /**
     * @covers Mono::set
     */
    public function testSetValue(): void
    {
        $this->object->set('World !');
        $this->assertEquals('World !', $this->object->asString());
    }
}
