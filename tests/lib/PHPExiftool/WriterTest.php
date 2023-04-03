<?php
/**
 * This file is part of the PHPExiftool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace lib\PHPExiftool;

use PHPExiftool\Driver;
use PHPExiftool\Driver\TagGroupInterface;
use PHPExiftool\Exception\InvalidArgumentException;
use PHPExiftool\PHPExiftool;
use PHPExiftool\Writer;
use PHPExiftool\Reader;
use PHPExiftool\RDFParser;
use PHPUnit_Framework_TestCase;
use PHPExiftool\Exception\EmptyCollectionException;

class WriterTester extends Writer
{
    private Writer $writer;

    public function __construct(Writer $writer)
    {
        parent::__construct($writer->exiftool);
        $this->writer = $writer;
    }

    public function __call($name, $args)
    {
        return call_user_func($this->writer->{$name}, $args);
    }

    public function addMetadatasArgTester($metadatas): array
    {
        return $this->writer->addMetadatasArg($metadatas);
    }

    public function getSyncCommandTester(): array
    {
        return $this->writer->getSyncCommand();
    }
}

class WriterTest extends PHPUnit_Framework_TestCase
{
    protected ?PHPExiftool $PHPExiftool = null;
    protected string $in = "";
    protected string $inWithICC = "";
    protected string $inPlace = "";
    protected string $out = "";

    protected function setUp()
    {
        parent::setUp();
        $this->in = __DIR__ . '/../../files/ExifTool.jpg';
        $this->inWithICC = __DIR__ . '/../../files/pixelWithIcc.jpg';
        $this->out = __DIR__ . '/../../files/ExifTool_erased.jpg';
        $this->inPlace = __DIR__ . '/../../files/ExifToolCopied.jpg';
        copy($this->in, $this->inPlace);

        $this->PHPExiftool = new PHPExiftool("/tmp");
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

    private function createWriter(): Writer
    {
        return $this->PHPExiftool->getFactory()->createWriter();
    }

    private function createReader(): Reader
    {
        return $this->PHPExiftool->getFactory()->createReader();
    }

    private function createTagGroup(string $tagName): TagGroupInterface
    {
        return $this->PHPExiftool->getFactory()->createTagGroup($tagName);
    }



    /**
     * @covers Writer::setMode
     * @covers Writer::isMode
     */
    public function testSetMode()
    {
        $writer = $this->createWriter();

        $writer->setMode(Writer::MODE_EXIF2IPTC, true);
        $this->assertTrue($writer->isMode(Writer::MODE_EXIF2IPTC));
        $writer->setMode(Writer::MODE_XMP2EXIF, true);
        $this->assertTrue($writer->isMode(Writer::MODE_XMP2EXIF));
        $writer->setMode(Writer::MODE_EXIF2IPTC, false);
        $this->assertFalse($writer->isMode(Writer::MODE_EXIF2IPTC));
        $writer->setMode(Writer::MODE_XMP2EXIF, true);
        $this->assertTrue($writer->isMode(Writer::MODE_XMP2EXIF));
    }

    /**
     * @covers Writer::copy
     * @throws EmptyCollectionException
     */
    public function testCopy()
    {
        $writer = $this->createWriter();

        $metadatas = new Driver\Metadata\MetadataBag();
        $writer->erase(true, true);
        $changedFiles = $writer->write($this->inWithICC, $metadatas, $this->out);
        $this->assertEquals(1, $changedFiles);

        $reader = $this->createReader();
        $metadatasRead = $reader->files($this->out)->first()->getMetadatas();
        $this->assertFalse(is_object($metadatasRead->get('IPTC:ObjectName')));

        $writer->copy($this->in, $this->out);

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
        $writer = $this->createWriter();

        $this->assertFalse($writer->hasModule(Writer::MODULE_MWG));
        $writer->setModule(Writer::MODULE_MWG, true);
        $this->assertTrue($writer->hasModule(Writer::MODULE_MWG));
        $writer->setModule(Writer::MODULE_MWG, false);
        $this->assertFalse($writer->hasModule(Writer::MODULE_MWG));
    }

    /**
     * @covers Writer::write
     * @covers Writer::erase
     * @throws EmptyCollectionException
     */
    public function testEraseWithoutICC()
    {
        $writer = $this->createWriter();
        $reader = $this->createReader();

        $uniqueId = 'UNI-QUE-ID';

        $metadatas = new Driver\Metadata\MetadataBag();
        $metadatas->add(new Driver\Metadata\Metadata($this->createTagGroup("IPTC:UniqueDocumentID"), new Driver\Value\Mono($uniqueId)));
        $metadatas->add(new Driver\Metadata\Metadata($this->createTagGroup("XMP_exif:ImageUniqueID"), new Driver\Value\Mono($uniqueId)));

        $writer->erase(true, false);
        $changedFiles = $writer->write($this->inWithICC, $metadatas, $this->out);
        $this->assertEquals(1, $changedFiles);

        $this->assertGreaterThan(200, count($reader->files($this->in)->first()->getMetadatas()));

        $reader->reset();
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
     * @throws EmptyCollectionException
     */
    public function testEraseWithICC()
    {
        $writer = $this->createWriter();
        $reader = $this->createReader();

        $uniqueId = 'UNI-QUE-ID';

        $metadatas = new Driver\Metadata\MetadataBag();
        $metadatas->add(new Driver\Metadata\Metadata($this->createTagGroup("IPTC:UniqueDocumentID"), new Driver\Value\Mono($uniqueId)));
        $metadatas->add(new Driver\Metadata\Metadata($this->createTagGroup("XMP_exif:ImageUniqueID"), new Driver\Value\Mono($uniqueId)));

        $writer->erase(true, true);
        $changedFiles = $writer->write($this->inWithICC, $metadatas, $this->out);
        $this->assertEquals(1, $changedFiles);

        $this->assertGreaterThan(200, count($reader->files($this->in)->first()->getMetadatas()));

        $reader->reset();
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
     * @throws EmptyCollectionException
     */
    public function testWrite()
    {
        $writer = $this->createWriter();
        $reader = $this->createReader();

        $metadatas = new Driver\Metadata\MetadataBag();
        $metadatas->add(new Driver\Metadata\Metadata($this->createTagGroup("IPTC:ObjectName"), new Driver\Value\Mono('Beautiful Object')));
        $metadatas->add(new Driver\Metadata\Metadata($this->createTagGroup("IPTC:ObjectName"), new Driver\Value\Mono('Beautiful Object')));
        $metadatas->add(new Driver\Metadata\Metadata($this->createTagGroup("XMP_iptcExt:PersonInImage"), new Driver\Value\Multi(['Romain', 'Nicolas'])));

        $changedFiles = $writer->write($this->in, $metadatas, $this->out);

        $this->assertEquals(1, $changedFiles);

        $metadatasRead = $reader->files($this->out)->first()->getMetadatas();

        $this->assertGreaterThan(200, count($metadatasRead));

        $this->assertEquals('Beautiful Object', $metadatasRead->get('IPTC:ObjectName')->getValue()->asString());
        $this->assertEquals(['Romain', 'Nicolas'], $metadatasRead->get('XMP-iptcExt:PersonInImage')->getValue()->asArray());
    }

    /**
     * @covers Writer::write
     * @throws EmptyCollectionException
     */
    public function testWriteInPlace()
    {
        $writer = $this->createWriter();
        $reader = $this->createReader();

        $metadatas = new Driver\Metadata\MetadataBag();
        $metadatas->add(new Driver\Metadata\Metadata($this->createTagGroup("IPTC:ObjectName"), new Driver\Value\Mono('Beautiful Object')));
        $metadatas->add(new Driver\Metadata\Metadata($this->createTagGroup("IPTC:ObjectName"), new Driver\Value\Mono('Beautiful Object')));
        $metadatas->add(new Driver\Metadata\Metadata($this->createTagGroup("XMP_iptcExt:PersonInImage"), new Driver\Value\Multi(['Romain', 'Nicolas'])));

        $changedFiles = $writer->write($this->inPlace, $metadatas);

        $this->assertEquals(1, $changedFiles);

        $metadatasRead = $reader->files($this->inPlace)->first()->getMetadatas();

        $this->assertGreaterThan(200, count($metadatasRead));

        $this->assertEquals('Beautiful Object', $metadatasRead->get('IPTC:ObjectName')->getValue()->asString());
        $this->assertEquals(['Romain', 'Nicolas'], $metadatasRead->get('XMP-iptcExt:PersonInImage')->getValue()->asArray());
    }

    /**
     * @covers Writer::write
     * @throws EmptyCollectionException
     */
    public function testWriteInPlaceErased()
    {
        $writer = $this->createWriter();
        $reader = $this->createReader();

        $metadatas = new Driver\Metadata\MetadataBag();
        $metadatas->add(new Driver\Metadata\Metadata($this->createTagGroup("IPTC:ObjectName"), new Driver\Value\Mono('Beautiful Object')));
        $metadatas->add(new Driver\Metadata\Metadata($this->createTagGroup("IPTC:ObjectName"), new Driver\Value\Mono('Beautiful Object')));
        $metadatas->add(new Driver\Metadata\Metadata($this->createTagGroup("XMP_iptcExt:PersonInImage"), new Driver\Value\Multi(['Romain', 'Nicolas'])));

        $writer->erase(true);
        $changedFiles = $writer->write($this->inPlace, $metadatas);

        $this->assertEquals(1, $changedFiles);

        $metadatasRead = $reader->files($this->inPlace)->first()->getMetadatas();

        $this->assertLessThan(50, count($metadatasRead));

        $this->assertEquals('Beautiful Object', $metadatasRead->get('IPTC:ObjectName')->getValue()->asString());
        $this->assertEquals(['Romain', 'Nicolas'], $metadatasRead->get('XMP-iptcExt:PersonInImage')->getValue()->asArray());
    }

    /**
     * @covers Writer::write
     * @covers InvalidArgumentException
     */
    public function testWriteFail()
    {
        $writer = $this->createWriter();

        $this->expectException(InvalidArgumentException::class);
        $writer->write('ici', new Driver\Metadata\MetadataBag());
    }

    /**
     * @covers Writer::addMetadatasArg
     */
    public function testAddMetadatasArg()
    {
        $this->markTestIncomplete();

        /* todo : fix decorator
        $writer = new WriterTester($this->createWriter());

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
        $metadatas->add(new Driver\Metadata\Metadata($this->createTagGroup("IPTC:ObjectName"), new Driver\Value\Mono('Beautiful Object')));
        $metadatas->add(new Driver\Metadata\Metadata($this->createTagGroup("XMP_iptcExt:PersonInImage"), new Driver\Value\Multi(['Romain', 'Nicolas'])));

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
        */
    }

    private function _testContains($a, $modes)
    {
        foreach ($modes as $mode) {
            $this->assertContains($mode[1], $a);
            $p = array_search($mode[1], $a, true);
            $this->assertTrue(is_int($p) && $p > 0 && $a[$p - 1] === $mode[0], sprintf("missing \"%s\" before \"%s\"", $mode[0], $mode[1]));
        }
    }
}


