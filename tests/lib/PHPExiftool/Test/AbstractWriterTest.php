<?php
/**
 * This file is part of the PHPExiftool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Test;

use PHPExiftool\Driver;
use PHPExiftool\Writer;
use PHPExiftool\Reader;
use PHPExiftool\RDFParser;
use PHPExiftool;
use PHPUnit_Framework_TestCase;

abstract class AbstractWriterTest extends PHPUnit_Framework_TestCase
{
    protected ?Writer $object = null;
    protected string $in = "";
    protected string $inWithICC = "";
    protected string $inPlace = "";
    protected string $out = "";

    protected function setUp()
    {
        $this->object = new Writer($this->getExiftool());
        $this->in = __DIR__ . '/../../../files/ExifTool.jpg';
        $this->inWithICC = __DIR__ . '/../../../files/pixelWithIcc.jpg';
        $this->out = __DIR__ . '/../../../files/ExifTool_erased.jpg';
        $this->inPlace = __DIR__ . '/../../../files/ExifToolCopied.jpg';
        copy($this->in, $this->inPlace);
    }

    protected function tearDown()
    {
        if (file_exists($this->out) && is_writable($this->out)) {
            unlink($this->out);
        }
        if (file_exists($this->inPlace) && is_writable($this->inPlace)) {
            unlink($this->inPlace);
        }
    }

    /**
     * @covers Writer::setMode
     * @covers Writer::isMode
     */
    public function testSetMode()
    {
        $this->object->setMode(Writer::MODE_EXIF2IPTC, true);
        $this->assertTrue($this->object->isMode(Writer::MODE_EXIF2IPTC));
        $this->object->setMode(Writer::MODE_XMP2EXIF, true);
        $this->assertTrue($this->object->isMode(Writer::MODE_XMP2EXIF));
        $this->object->setMode(Writer::MODE_EXIF2IPTC, false);
        $this->assertFalse($this->object->isMode(Writer::MODE_EXIF2IPTC));
        $this->object->setMode(Writer::MODE_XMP2EXIF, true);
        $this->assertTrue($this->object->isMode(Writer::MODE_XMP2EXIF));
    }

    /**
     * @covers Writer::copy
     * @throws PHPExiftool\Exception\EmptyCollectionException
     */
    public function testCopy()
    {
        $metadatas = new Driver\Metadata\MetadataBag();
        $this->object->erase(true, true);
        $changedFiles = $this->object->write($this->inWithICC, $metadatas, $this->out);
        $this->assertEquals(1, $changedFiles);

        $reader = new Reader($this->getExiftool(), $this->getRDFParser());
        $metadatasRead = $reader->files($this->out)->first()->getMetadatas();
        $this->assertFalse(is_object($metadatasRead->get('IPTC:ObjectName')));

        $this->object->copy($this->in, $this->out);

        $metadatasRead = $reader->files($this->out)->first()->getMetadatas();
        $this->assertTrue(is_object($metadatasRead->get('IPTC:ObjectName')));
        $this->assertEquals("Test IPTC picture", $metadatasRead->get('IPTC:ObjectName')->getValue()->asString());
    }

    /**
     * @covers Writer::setModule
     * @covers Writer::hasModule
     */
    public function testSetModule()
    {
        $this->assertFalse($this->object->hasModule(Writer::MODULE_MWG));
        $this->object->setModule(Writer::MODULE_MWG, true);
        $this->assertTrue($this->object->hasModule(Writer::MODULE_MWG));
        $this->object->setModule(Writer::MODULE_MWG, false);
        $this->assertFalse($this->object->hasModule(Writer::MODULE_MWG));
    }

    /**
     * @covers Writer::write
     * @covers Writer::erase
     * @throws PHPExiftool\Exception\EmptyCollectionException
     */
    public function testEraseWithoutICC()
    {
        $uniqueId = 'UNI-QUE-ID';

        $metadatas = new Driver\Metadata\MetadataBag();
        $metadatas->add(new Driver\Metadata\Metadata(new Driver\TagGroup\IPTC\UniqueDocumentID(), new Driver\Value\Mono($uniqueId)));
        $metadatas->add(new Driver\Metadata\Metadata(new Driver\TagGroup\XMP_exif\ImageUniqueID(), new Driver\Value\Mono($uniqueId)));

        $this->object->erase(true, false);
        $changedFiles = $this->object->write($this->inWithICC, $metadatas, $this->out);
        $this->assertEquals(1, $changedFiles);

        $reader = new Reader($this->getExiftool(), $this->getRDFParser());
        $this->assertGreaterThan(200, count($reader->files($this->in)->first()->getMetadatas()));

        $reader = new Reader($this->getExiftool(), $this->getRDFParser());
        $this->assertGreaterThan(4, count($reader->files($this->out)->first()->getMetadatas()));
        $this->assertLessThan(30, count($reader->files($this->out)->first()->getMetadatas()));

        $acceptedMetas = [
            'Exiftool:\w+',
            'System:\w+',
            'File:\w+',
            'Composite:\w+',
            'IPTC:CodedCharacterSet',
            'IPTC:EnvelopeRecordVersion',
            'IPTC:UniqueDocumentID',
            'IPTC:ApplicationRecordVersion',
            'Photoshop:IPTCDigest',
            'XMP-x:XMPToolkit',
            'XMP-exif:ImageUniqueID',
            'Adobe:DCTEncodeVersion',
            'Adobe:APP14Flags0',
            'Adobe:APP14Flags1',
            'Adobe:ColorTransform',
        ];

        foreach ($reader->files($this->out)->first()->getMetadatas() as $meta) {

            $found = false;

            foreach ($acceptedMetas as $accepted) {
                if (preg_match('/' . $accepted . '/i', $meta->getTagGroup()->getId())) {
                    $found = true;
                    break;
                }
            }

            if (!$found) {
                $this->fail(sprintf('Unexpected meta %s found', $meta->getTagGroup()->getId()));
            }
        }
    }

    /**
     * @throws PHPExiftool\Exception\EmptyCollectionException
     */
    public function testEraseWithICC()
    {
        $uniqueId = 'UNI-QUE-ID';

        $metadatas = new Driver\Metadata\MetadataBag();
        $metadatas->add(new Driver\Metadata\Metadata(new Driver\TagGroup\IPTC\UniqueDocumentID(), new Driver\Value\Mono($uniqueId)));
        $metadatas->add(new Driver\Metadata\Metadata(new Driver\TagGroup\XMP_exif\ImageUniqueID(), new Driver\Value\Mono($uniqueId)));

        $this->object->erase(true, true);
        $changedFiles = $this->object->write($this->inWithICC, $metadatas, $this->out);
        $this->assertEquals(1, $changedFiles);

        $reader = new Reader($this->getExiftool(), $this->getRDFParser());
        $this->assertGreaterThan(200, count($reader->files($this->in)->first()->getMetadatas()));

        $reader = new Reader($this->getExiftool(), $this->getRDFParser());
        $this->assertGreaterThan(4, count($reader->files($this->out)->first()->getMetadatas()));

        $acceptedMetas = [
            'Exiftool:\w+',
            'System:\w+',
            'File:\w+',
            'Composite:\w+',
            'IPTC:CodedCharacterSet',
            'ICC-header:\w+',
            'IPTC:EnvelopeRecordVersion',
            'IPTC:UniqueDocumentID',
            'IPTC:ApplicationRecordVersion',
            'Photoshop:IPTCDigest',
            'XMP-x:XMPToolkit',
            'XMP-exif:ImageUniqueID',
            'Adobe:DCTEncodeVersion',
            'Adobe:APP14Flags0',
            'Adobe:APP14Flags1',
            'Adobe:ColorTransform',
        ];

        foreach ($reader->files($this->out)->first()->getMetadatas() as $meta) {

            $found = false;

            foreach ($acceptedMetas as $accepted) {
                if (preg_match('/' . $accepted . '/i', $meta->getTagGroup()->getId())) {
                    $found = true;
                    break;
                }
            }

            if (!$found) {
                $this->fail(sprintf('Unexpected meta %s found', $meta->getTagGroup()->getId()));
            }
        }
    }

    /**
     * @covers Writer::write
     * @throws PHPExiftool\Exception\EmptyCollectionException
     */
    public function testWrite()
    {
        $metadatas = new Driver\Metadata\MetadataBag();
        $metadatas->add(new Driver\Metadata\Metadata(new Driver\TagGroup\IPTC\ObjectName(), new Driver\Value\Mono('Beautiful Object')));
        $metadatas->add(new Driver\Metadata\Metadata(new Driver\TagGroup\IPTC\ObjectName(), new Driver\Value\Mono('Beautiful Object')));
        $metadatas->add(new Driver\Metadata\Metadata(new Driver\TagGroup\XMP_iptcExt\PersonInImage(), new Driver\Value\Multi(['Romain', 'Nicolas'])));

        $changedFiles = $this->object->write($this->in, $metadatas, $this->out);

        $this->assertEquals(1, $changedFiles);

        $reader = new Reader($this->getExiftool(), $this->getRDFParser());
        $metadatasRead = $reader->files($this->out)->first()->getMetadatas();

        $this->assertGreaterThan(200, count($metadatasRead));

        $this->assertEquals('Beautiful Object', $metadatasRead->get('IPTC:ObjectName')->getValue()->asString());
        $this->assertEquals(['Romain', 'Nicolas'], $metadatasRead->get('XMP-iptcExt:PersonInImage')->getValue()->asArray());
    }

    /**
     * @covers Writer::write
     * @throws PHPExiftool\Exception\EmptyCollectionException
     */
    public function testWriteInPlace()
    {
        $metadatas = new Driver\Metadata\MetadataBag();
        $metadatas->add(new Driver\Metadata\Metadata(new Driver\TagGroup\IPTC\ObjectName(), new Driver\Value\Mono('Beautiful Object')));
        $metadatas->add(new Driver\Metadata\Metadata(new Driver\TagGroup\IPTC\ObjectName(), new Driver\Value\Mono('Beautiful Object')));
        $metadatas->add(new Driver\Metadata\Metadata(new Driver\TagGroup\XMP_iptcExt\PersonInImage(), new Driver\Value\Multi(['Romain', 'Nicolas'])));

        $changedFiles = $this->object->write($this->inPlace, $metadatas);

        $this->assertEquals(1, $changedFiles);

        $reader = new Reader($this->getExiftool(), $this->getRDFParser());
        $metadatasRead = $reader->files($this->inPlace)->first()->getMetadatas();

        $this->assertGreaterThan(200, count($metadatasRead));

        $this->assertEquals('Beautiful Object', $metadatasRead->get('IPTC:ObjectName')->getValue()->asString());
        $this->assertEquals(['Romain', 'Nicolas'], $metadatasRead->get('XMP-iptcExt:PersonInImage')->getValue()->asArray());
    }

    /**
     * @covers Writer::write
     * @throws PHPExiftool\Exception\EmptyCollectionException
     */
    public function testWriteInPlaceErased()
    {
        $metadatas = new Driver\Metadata\MetadataBag();
        $metadatas->add(new Driver\Metadata\Metadata(new Driver\TagGroup\IPTC\ObjectName(), new Driver\Value\Mono('Beautiful Object')));
        $metadatas->add(new Driver\Metadata\Metadata(new Driver\TagGroup\IPTC\ObjectName(), new Driver\Value\Mono('Beautiful Object')));
        $metadatas->add(new Driver\Metadata\Metadata(new Driver\TagGroup\XMP_iptcExt\PersonInImage(), new Driver\Value\Multi(['Romain', 'Nicolas'])));

        $this->object->erase(true);
        $changedFiles = $this->object->write($this->inPlace, $metadatas);

        $this->assertEquals(1, $changedFiles);

        $reader = new Reader($this->getExiftool(), $this->getRDFParser());
        $metadatasRead = $reader->files($this->inPlace)->first()->getMetadatas();

        $this->assertLessThan(50, count($metadatasRead));

        $this->assertEquals('Beautiful Object', $metadatasRead->get('IPTC:ObjectName')->getValue()->asString());
        $this->assertEquals(['Romain', 'Nicolas'], $metadatasRead->get('XMP-iptcExt:PersonInImage')->getValue()->asArray());
    }

    /**
     * @covers Writer::write
     * @covers PHPExiftool\Exception\InvalidArgumentException
     */
    public function testWriteFail()
    {
        $this->expectException(PHPExiftool\Exception\InvalidArgumentException::class);
        $this->object->write('ici', new Driver\Metadata\MetadataBag());
    }

    /**
     * @covers Writer::addMetadatasArg
     */
    public function testAddMetadatasArg()
    {
        $modes = [
            Writer::MODE_EXIF2IPTC => ['-@', 'exif2iptc.args'],
            Writer::MODE_EXIF2XMP  => ['-@', 'exif2xmp.args'],
            Writer::MODE_IPTC2EXIF => ['-@', 'iptc2exif.args'],
            Writer::MODE_IPTC2XMP  => ['-@', 'iptc2xmp.args'],
            Writer::MODE_GPS2XMP   => ['-@', 'gps2xmp.args'],
            Writer::MODE_PDF2XMP   => ['-@', 'pdf2xmp.args'],
            Writer::MODE_XMP2PDF   => ['-@', 'xmp2pdf.args'],
            Writer::MODE_XMP2GPS   => ['-@', 'xmp2gps.args'],
            Writer::MODE_XMP2EXIF  => ['-@', 'xmp2exif.args'],
            Writer::MODE_XMP2IPTC  => ['-@', 'xmp2iptc.args'],
        ];

        $metadatas = new Driver\Metadata\MetadataBag();
        $metadatas->add(new Driver\Metadata\Metadata(new Driver\TagGroup\IPTC\ObjectName(), new Driver\Value\Mono('Beautiful Object')));
        $metadatas->add(new Driver\Metadata\Metadata(new Driver\TagGroup\XMP_iptcExt\PersonInImage(), new Driver\Value\Multi(['Romain', 'Nicolas'])));

        $writer = new WriterTester($this->getExiftool());
        $this->assertEmpty($writer->getSyncCommandTester());

        // modes accumulate
        $a = [];
        foreach ($modes as $k => $v) {
            $writer->setMode($k, true);
            $a[] = $v;
            $this->_testContains($writer->getSyncCommandTester(), $a);
        }

        // unset a mode
        $writer->setMode(Writer::MODE_XMP2IPTC, false);
        $this->assertNotContains('xmp2iptc', $writer->getSyncCommandTester());


        $writer->setModule(Writer::MODULE_MWG, true);
        $a = $writer->addMetadatasArgTester($metadatas);
        $this->_testContains($a, [['-use', 'MWG']]);

        $writer->setModule(Writer::MODULE_MWG, false);
        $this->assertNotContains('MWG', $writer->addMetadatasArgTester($metadatas));

        $this->assertContains("-XMP-iptcExt:PersonInImage=Nicolas", $writer->addMetadatasArgTester($metadatas));
    }

    abstract protected function getExiftool();

    abstract protected function getRDFParser();

    private function _testContains($a, $modes)
    {
        foreach ($modes as $mode) {
            $this->assertContains($mode[1], $a);
            $p = array_search($mode[1], $a, true);
            $this->assertTrue(is_int($p) && $p > 0 && $a[$p - 1] === $mode[0], sprintf("missing \"%s\" before \"%s\"", $mode[0], $mode[1]));
        }
    }
}


class WriterTester extends Writer
{
    public function addMetadatasArgTester($metadatas): array
    {
        return parent::addMetadatasArg($metadatas);
    }

    public function getSyncCommandTester(): array
    {
        return parent::getSyncCommand();
    }
}
