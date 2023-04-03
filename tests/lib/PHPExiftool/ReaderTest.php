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

use PHPExiftool\Exception\EmptyCollectionException;
use PHPExiftool\Exception\LogicException;
use PHPExiftool\Exception\RuntimeException;
use PHPExiftool\PHPExiftool;
use PHPExiftool\Reader;
use PHPUnit_Framework_TestCase;
use Symfony\Component\Process\Process;



class ReaderTest extends \PHPUnit_Framework_TestCase {

    private ?PHPExiftool $PHPExiftool = null;
    protected static string $tmpDir = "";
    protected static bool $disableSymLinkTest = false;

    public static function setUpBeforeClass()
    {
        parent::setUpBeforeClass();

        $tmpDir = __DIR__ . '/tmp';

        if (defined('PHP_WINDOWS_VERSION_BUILD')) {
            $command = ['rmdir', '/q', '/s', escapeshellarg($tmpDir)];
        } else {
            $command = ['rmdir', '-Rf', escapeshellarg($tmpDir)];
        }

        $process = new Process($command);
        $process->run();

        if (!is_dir($tmpDir)) {
            mkdir($tmpDir);
        }

        self::$tmpDir = $tmpDir . '/exiftool_reader';

        if (!is_dir(self::$tmpDir)) {
            mkdir(self::$tmpDir);
        }

        copy(__DIR__.'/../../files/ExifTool.jpg', self::$tmpDir . '/test2.jpg');
        copy(__DIR__.'/../../files/ExifTool.jpg', self::$tmpDir . '/test.jpg');

        if (!is_dir(self::$tmpDir . '/dir')) {
            mkdir(self::$tmpDir . '/dir');
        }
        if (!is_dir(self::$tmpDir . '/usr')) {
            mkdir(self::$tmpDir . '/usr');
        }

        $tmpDir2 = $tmpDir . '/exiftool_reader2';

        if (!is_dir($tmpDir2)) {
            mkdir($tmpDir2);
        }

        copy(__DIR__.'/../../files/ExifTool.jpg', $tmpDir2 . '/test2.jpg');

        if (defined('PHP_WINDOWS_VERSION_BUILD')) {
            self::$disableSymLinkTest = true;
        }
        elseif (!is_link(self::$tmpDir . '/symlink')) {

            if (!@symlink($tmpDir2, self::$tmpDir . '/symlink')) {
                self::$disableSymLinkTest = true;
            }
        }

        copy(__DIR__.'/../../files/plop/CanonRaw.cr2', self::$tmpDir . '/dir/CanonRaw.cr2');

        $tmpDir3 = $tmpDir . '/exiftool_reader3';

        if (!is_dir($tmpDir3)) {
            mkdir($tmpDir3);
        }

        if (!is_dir($tmpDir3 . '/.svn')) {
            mkdir($tmpDir3 . '/.svn');
        }

        if (!is_dir($tmpDir3 . '/.roro')) {
            mkdir($tmpDir3 . '/.roro');
        }

        if (!is_dir($tmpDir3 . '/.git')) {
            mkdir($tmpDir3 . '/.git');
        }

        touch($tmpDir3 . '/.git/config');
        touch($tmpDir3 . '/.roro/.roro.tmp');
        copy(__DIR__.'/../../files/ExifTool.jpg', $tmpDir3 . '/.exiftool.jpg');

    }

    protected function setUp()
    {
        parent::setUp();
        $this->PHPExiftool = new PHPExiftool("/tmp");
    }

    private function createReader(): Reader
    {
        return $this->PHPExiftool->getFactory()->createReader();
    }

    /**
     * @covers Reader::__destruct
     */
    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @covers Reader::getIterator
     */
    public function testGetIterator()
    {
        $file = self::$tmpDir . '/test.jpg';
        $reader = $this->createReader();
        $this->assertInstanceOf('\\Iterator', $reader->files($file)->getIterator());
    }

    /**
     * @covers Reader::append
     * @covers Reader::all
     */
    public function testAppend()
    {
        $reader1 = $this->createReader();
        $file1 = self::$tmpDir . '/test.jpg';
        $file2 = self::$tmpDir . '/test2.jpg';
        $file3 = self::$tmpDir . '/dir/CanonRaw.cr2';
        $this->assertEquals(1, count($reader1->files($file1)->all()));


        $reader2 = $this->createReader();
        $reader2->files(array($file2, $file3));
        $this->assertEquals(3, count($reader2->append($reader1)->all()));
    }

    /**
     * @covers Reader::sort
     * @covers Reader::all
     */
    public function testSort()
    {
        $file1 = self::$tmpDir . '/test.jpg';
        $file2 = self::$tmpDir . '/test2.jpg';
        $file3 = self::$tmpDir . '/dir/CanonRaw.cr2';

        $reader = $this->createReader();
        $reader->files(array($file3, $file2, $file1));
        $reader->sort(array('directory', 'filename', 'cigarette'));

        $results = array();

        foreach ($reader->all() as $entity) {
            $results[] = basename($entity->getFile());
        }

        $this->assertSame(array('test.jpg', 'test2.jpg', 'CanonRaw.cr2'), $results);
    }

    /**
     * @covers Reader::files
     * @covers Reader::buildQuery
     * @throws EmptyCollectionException
     */
    public function testFiles()
    {
        $reader = $this->createReader();

        $file1 = self::$tmpDir . '/test.jpg';
        $reader->files($file1);

        $file2 = $reader->files(self::$tmpDir . '/test.jpg')->first()->getFile();

        $this->assertEquals(realpath($file1), realpath($file2));
    }

    /**
     * @covers Reader::resetResults
     */
    public function testResetFilters()
    {
        $reader = $this->createReader();

        $file = self::$tmpDir . '/test.jpg';
        $reader->files($file)->all();
        $file = self::$tmpDir . '/test2.jpg';
        $reader->files($file)->all();

        $this->assertEquals(2, count($reader->all()));
    }

    /**
     * @covers Reader::ignoreDotFiles
     * @covers Reader::all
     */
    public function testIgnoreVCS()
    {
        $reader = $this->createReader();

        $reader->in(self::$tmpDir . '3');
        $this->assertEquals(1, count($reader->all()));
    }

    /**
     * @covers Reader::ignoreDotFiles
     * @covers Reader::all
     */
    public function testIgnoreDotFiles()
    {
        $reader = $this->createReader();

        $reader->in(self::$tmpDir . '3');
        $this->assertEquals(1, count($reader->all()));

        $reader->ignoreDotFiles()->in(self::$tmpDir . '3');
        $this->assertEquals(0, count($reader->all()));
    }

    /**
     * @covers Reader::in
     * @covers Reader::buildQuery
     * @covers Reader::all
     */
    public function testIn()
    {
        $reader = $this->createReader();

        $reader->reset()->in(self::$tmpDir);
        $this->assertEquals(3, count($reader->all()));

        $reader->reset()->in(self::$tmpDir . '/dir');
        $this->assertEquals(1, count($reader->all()));

        $reader->reset()->in(__DIR__ . '/../../../vendor/exiftool/exiftool/');

        foreach ($reader as $file) {
            $m = $file->getMetadatas();
            $this->assertEquals(basename($file->getFile()), $file->getMetadatas()->get('System:FileName')->getValue()->asString());
        }
    }

    /**
     * @covers Reader::exclude
     * @covers Reader::computeExcludeDirs
     * @covers Reader::buildQuery
     * @covers Reader::all
     */
    public function testExclude()
    {
        $reader = $this->createReader();

        $reader
                ->in(self::$tmpDir)
                ->exclude(self::$tmpDir . '/dir');

        $this->assertEquals(2, count($reader->all()));
    }

    /**
     * @dataProvider getExclude
     * @covers Reader::computeExcludeDirs
     * @covers Reader::all
     */
    public function testComputeExcludeDirs($dir)
    {
        $reader = $this->createReader();

        $reader
                ->in(self::$tmpDir)
                ->exclude($dir)
                ->all();
    }

    public function getExclude(): array
    {
        return array(
            array(self::$tmpDir . '/dir/'),
            array(self::$tmpDir . '/dir'),
            array('dir'),
            array('/dir'),
            array('/usr'),
            array('usr'),
            array('dir/'),
        );
    }

    /**
     * @dataProvider getWrongExclude
     * @covers Reader::computeExcludeDirs
     * @covers \PHPExiftool\Exception\RuntimeException
     */
    public function testComputeExcludeDirsFail($dir)
    {
        $reader = $this->createReader();

        $this->expectException(RuntimeException::class);
        $reader
                ->in(self::$tmpDir)
                ->exclude($dir)
                ->all();
    }

    public function getWrongExclude(): array
    {
        return array(
            array(self::$tmpDir . '/dir/dir2'),
            array(self::$tmpDir . '/dirlo'),
            array('dir/dir2'),
            array('/usr/local'),
            array('usr/local'),
            array('/tmp'),
        );
    }

    /**
     * @covers Reader::extensions
     * @covers Reader::buildQuery
     * @covers Reader::buildQueryAndExecute
     */
    public function testExtensions()
    {
        $reader = $this->createReader();
        $reader->in(self::$tmpDir);
        $this->assertEquals(3, count($reader->all()));

        $reader = $this->createReader();
        $reader->in(self::$tmpDir)->notRecursive()->extensions(array('cr2'));
        $this->assertEquals(0, count($reader->all()));

        $reader = $this->createReader();
        $reader->in(self::$tmpDir)->extensions(array('cr2'));
        $this->assertEquals(1, count($reader->all()));

        $reader = $this->createReader();
        $reader->in(self::$tmpDir)->extensions(array('jpg'));
        $this->assertEquals(2, count($reader->all()));

        $reader = $this->createReader();
        $reader->in(self::$tmpDir)->extensions('jpg')->extensions('cr2');
        $this->assertEquals(3, count($reader->all()));

        $reader = $this->createReader();
        $reader->in(self::$tmpDir)->extensions(array('jpg'), false);
        $this->assertEquals(1, count($reader->all()));

        $reader = $this->createReader();
        $reader->in(self::$tmpDir)->extensions(array('cr2', 'jpg'), false)->notRecursive();
        $this->assertEquals(0, count($reader->all()));
    }

    /**
     * @covers Reader::extensions
     * @covers \PHPExiftool\Exception\LogicException
     */
    public function testExtensionsMisUse()
    {
        $reader = $this->createReader();

        $this->expectException(LogicException::class);
        $reader->extensions('exiftool')->extensions('jpg', false);
    }

    /**
     * @covers Reader::followSymLinks
     */
    public function testFollowSymLinks()
    {
        if (self::$disableSymLinkTest) {
            $this->markTestSkipped('This system does not support symlinks');
        }

        $reader = $this->createReader();

        $reader->in(self::$tmpDir)
                ->followSymLinks();

        $this->assertInstanceOf('\\Doctrine\\Common\\Collections\\ArrayCollection', $reader->all());
        $this->assertEquals(4, count($reader->all()));
    }

    /**
     * @covers Reader::notRecursive
     * @covers Reader::buildQuery
     */
    public function testNotRecursive()
    {
        $reader = $this->createReader();

        $reader->in(self::$tmpDir)->notRecursive();
        $this->assertEquals(2, count($reader->all()));
    }

    /**
     * @covers Reader::getOneOrNull
     */
    public function testGetOneOrNull()
    {
        $reader = $this->createReader();

        $reader->in(self::$tmpDir)->notRecursive()->extensions(array('jpg', 'cr2'), false);

        $this->assertNull($reader->getOneOrNull());
    }

    /**
     * @covers Reader::first
     * @covers \PHPExiftool\Exception\EmptyCollectionException
     */
    public function testFirstEmpty()
    {
        $reader = $this->createReader();

        $this->expectException(EmptyCollectionException::class);
        $reader->in(self::$tmpDir)->notRecursive()->extensions(array('jpg', 'cr2'), false);
        $reader->first();
    }

    /**
     * @covers Reader::first
     */
    public function testFirst()
    {
        $reader = $this->createReader();

        $reader->in(self::$tmpDir);

        $this->assertInstanceOf('\\PHPExiftool\\FileEntity', $reader->first());
    }

    /**
     * @covers Reader::buildQuery
     */
    public function testFail()
    {
        $reader = $this->createReader();

        $this->expectException(LogicException::class);
        $reader->all();
    }

    /**
     * @covers Reader::all
     * @covers Reader::buildQueryAndExecute
     */
    public function testAll()
    {
        $reader = $this->createReader();

        $reader->in(self::$tmpDir);

        $this->assertInstanceOf('\\Doctrine\\Common\\Collections\\ArrayCollection', $reader->all());
        $this->assertEquals(3, count($reader->all()));
    }

}
