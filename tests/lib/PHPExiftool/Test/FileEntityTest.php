<?php
/**
 * This file is part of the PHPExiftool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace lib\PHPExiftool\Test;

use Monolog\Handler\NullHandler;
use Monolog\Logger;
use PHPExiftool\FileEntity;
use PHPExiftool\RDFParser;
use PHPUnit\Framework\TestCase;

class FileEntityTest extends TestCase
{
    protected FileEntity $object;
    protected Logger $logger;

    /**
     * @covers FileEntity::__construct
     */
    protected function setUp(): void
    {
        $dom = new \DOMDocument();
        $dom->loadXML(file_get_contents(__DIR__ . '/../../../files/ExifTool.xml'));

        $this->logger = new Logger('Tests');
        $this->logger->pushHandler(new NullHandler());

        $this->object = new FileEntity('testFile', $dom, new RDFParser("/tmp", $this->logger));
    }

    /**
     * @covers FileEntity::getIterator
     */
    public function testGetIterator()
    {
        $this->assertInstanceOf('\\Iterator', $this->object->getIterator());
    }

    /**
     * @covers FileEntity::getFile
     */
    public function testGetFile()
    {
        $this->assertIsString($this->object->getFile());
    }

    /**
     * @covers FileEntity::getMetadatas
     */
    public function testGetMetadatas()
    {
        $this->assertInstanceOf('\\PHPExiftool\Driver\Metadata\MetadataBag', $this->object->getMetadatas());
        $this->assertCount(348, $this->object->getMetadatas());
    }

    /**
     * @covers FileEntity::executeQuery
     */
    public function testExecuteQuery()
    {
        $this->assertInstanceOf('\\PHPExiftool\\Driver\\Value\\Mono', $this->object->executeQuery('IFD0:Copyright'));
        $this->assertEquals('Copyright 2004 Phil Harvey', $this->object->executeQuery('IFD0:Copyright')->asString());

        $this->assertInstanceOf('\\PHPExiftool\\Driver\\Value\\Binary', $this->object->executeQuery('CIFF:FreeBytes'));

        $this->assertInstanceOf('\\PHPExiftool\\Driver\\Value\\Multi', $this->object->executeQuery('XMP-dc:Subject'));
        $this->assertEquals(array('ExifTool', 'Test', 'XMP'), $this->object->executeQuery('XMP-dc:Subject')->asArray());
    }

    public function testCacheKey()
    {
        $o = new FileEntity('bad_{}()/\\@:_chars', new \DOMDocument(), new RDFParser("/tmp", $this->logger));
        $k = $o->getCacheKey();
        $this->assertEquals('bad_%7B%7D%28%29%2F%5C%40%3A_chars', $k);
    }
}
