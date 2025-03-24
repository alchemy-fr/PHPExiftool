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

use PHPExiftool\Driver\Metadata\MetadataBag;
use PHPUnit\Framework\TestCase;

class MetadataBagTest extends TestCase
{
    protected MetadataBag $object;

    protected function setUp(): void
    {
        $this->object = new MetadataBag();
    }

    /**
     * @covers MetadataBag::filterKeysByRegExp
     */
    public function testFilterKeysByRegExp(): void
    {
        $this->object->set('oneKey', 'oneValue');
        $this->object->set('oneSecondKey', 'anotherValue');
        $this->object->set('thirdKey', 'thirdValue');

        $this->assertCount(2, $this->object->filterKeysByRegExp('/one.*/'));
    }
}
