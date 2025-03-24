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

use PHPExiftool\Driver\Value\Multi;
use PHPExiftool\Driver\Value\ValueInterface;
use PHPUnit\Framework\TestCase;

class MultiTest extends TestCase
{
    protected Multi $object;

    /**
     * @covers Multi::__construct
     */
    protected function setUp(): void
    {
        $this->object = new Multi(array('hello', 'world !'));
    }

    /**
     * @covers Multi::getType
     */
    public function testGetType(): void
    {
        $this->assertEquals(ValueInterface::TYPE_MULTI, $this->object->getType());
    }

    /**
     * @covers Multi::asArray
     */
    public function testAsArray(): void
    {
        $this->assertEquals(array('hello', 'world !'), $this->object->asArray());
    }

    /**
     * @covers Multi::addValue
     */
    public function testAddValue(): void
    {
        $this->object->addValue('tim');
        $this->assertEquals(array('hello', 'world !', 'tim'), $this->object->asArray());
    }

    /**
     * @covers Multi::reset
     */
    public function testReset(): void
    {
        $this->object->reset();
        $this->assertEquals(array(), $this->object->asArray());
    }
}
