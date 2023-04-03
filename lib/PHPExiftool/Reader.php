<?php

/**
 * This file is part of the PHPExiftool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool;

use Doctrine\Common\Collections\ArrayCollection;
use Exception;
use Iterator;
use IteratorAggregate;
use PHPExiftool\Exception\EmptyCollectionException;
use PHPExiftool\Exception\LogicException;
use PHPExiftool\Exception\RuntimeException;
use Psr\Log\LoggerInterface;

/**
 *
 * Exiftool Reader, inspired by Symfony2 Finder.
 *
 * It scans files and directories, and provide an iterator on the FileEntities
 * generated based on the results.
 *
 * Example usage:
 *
 *      $Reader = new Reader();
 *
 *      $Reader->in('/path/to/directory')
 *              ->exclude('tests')
 *              ->extensions(array('jpg', 'xml));
 *
 *      //Throws an exception if no file found
 *      $first = $Reader->first();
 *
 *      //Returns null if no file found
 *      $first = $Reader->getOneOrNull();
 *
 *      foreach($Reader as $entity)
 *      {
 *          //Do your logic with FileEntity
 *      }
 *
 *
 * @todo   implement match conditions (-if EXPR) (name or metadata tag)
 * @todo   implement match filter
 * @todo   implement sort
 * @todo   implement -l
 *
 * @author Romain Neutron <imprec@gmail.com>
 */
class Reader implements IteratorAggregate
{
    protected array $files = [];
    protected array $dirs = [];
    protected array $excludeDirs = [];
    protected array $extensions = [];
    protected ?bool $extensionsToggle = null;
    protected bool $followSymLinks = false;
    protected bool $recursive = true;
    protected bool $ignoreDotFile = false;
    protected array $sort = [];
    protected ?RDFParser $parser;
    protected Exiftool $exiftool;
    protected int $timeout = 60;

    protected ?ArrayCollection $collection = null;
    protected array $readers = [];

    /**
     *  Constructor
     */
    private function __construct(Exiftool $exiftool, RDFParser $parser)
    {
        $this->exiftool = $exiftool;
        $this->parser = $parser;
    }

    public static function create(Exiftool $exiftool, RDFParser $parser)
    {
        return new self($exiftool, $parser);
    }

    public function __destruct()
    {
        $this->parser = null;
        $this->collection = null;
    }

    public function setTimeout($timeout):self
    {
        $this->timeout = $timeout;

        return $this;
    }

    public function reset(): self
    {
        $this->files
            = $this->dirs
            = $this->excludeDirs
            = $this->extensions
            = $this->sort
            = $this->readers = [];

        $this->recursive = true;
        $this->ignoreDotFile = $this->followSymLinks = false;
        $this->extensionsToggle = null;

        return $this;
    }

    /**
     * Implements \IteratorAggregate Interface
     *
     * @return Iterator
     * @throws Exception
     */
    public function getIterator(): Iterator
    {
        return $this->all()->getIterator();
    }

    /**
     * Add files to scan
     *
     * Example usage:
     *
     *      // Will scan 3 files : dc00.jpg in CWD and absolute
     *      // paths /tmp/image.jpg and /tmp/raw.CR2
     *      $Reader ->files('dc00.jpg')
     *              ->files(array('/tmp/image.jpg', '/tmp/raw.CR2'))
     *
     * @param string|array $files The files
     * @return Reader
     */
    public function files($files): self
    {
        $this->resetResults();
        $this->files = array_merge($this->files, (array)$files);

        return $this;
    }

    /**
     * Add dirs to scan
     *
     * Example usage:
     *
     *      // Will scan 3 dirs : documents in CWD and absolute
     *      // paths /usr and /var
     *      $Reader ->in('documents')
     *              ->in(array('/tmp', '/var'))
     *
     * @param string|array $dirs The directories
     * @return Reader
     */
    public function in($dirs): self
    {
        $this->resetResults();
        $this->dirs = array_merge($this->dirs, (array)$dirs);

        return $this;
    }

    /**
     * Append a reader to this one.
     * Finale result will be the sum of the current reader and all appended ones.
     *
     * @param Reader $reader The reader to append
     * @return Reader
     */
    public function append(Reader $reader): self
    {
        $this->resetResults();
        $this->readers[] = $reader;

        return $this;
    }

    /**
     * Sort results with one or many criteria
     *
     * Example usage:
     *
     *      // Will sort by directory then filename
     *      $Reader ->in('documents')
     *              ->sort(array('directory', 'filename'))
     *
     *      // Will sort by filename
     *      $Reader ->in('documents')
     *              ->sort('filename')
     *
     * @param string|array $by
     * @return Reader
     */
    public function sort($by): self
    {
        static $availableSorts = [
            'directory', 'filename', 'createdate', 'modifydate', 'filesize'
        ];

        foreach ((array)$by as $sort) {

            if (!in_array($sort, $availableSorts)) {
                continue;
            }
            $this->sort[] = $sort;
        }

        return $this;
    }

    /**
     * Exclude directories from scan
     *
     * Warning: only first depth directories can be excluded
     * Imagine a directory structure like below, With a scan in "root", only
     * sub1 or sub2 can be excluded, not subsub.
     *
     *      root
     *      ├── sub1
     *      └── sub2
     *          └── subsub
     *
     * Example usage:
     *
     *      // Will scan documents recursively, discarding documents/test
     *      $Reader ->in('documents')
     *              ->exclude(array('test'))
     *
     * @param string|array $dirs The directories
     * @return Reader
     */
    public function exclude($dirs): self
    {
        $this->resetResults();
        $this->excludeDirs = array_merge($this->excludeDirs, (array)$dirs);

        return $this;
    }

    /**
     * Restrict / Discard files based on extensions.
     * Extensions are case_insensitive.
     *
     * @param string|array $extensions The list of extension
     * @param Boolean $restrict        Toggle restrict/discard method
     * @return Reader
     * @throws LogicException
     */
    public function extensions($extensions, bool $restrict = true): self
    {
        $this->resetResults();

        if (!is_null($this->extensionsToggle)) {
            if ($restrict !== $this->extensionsToggle) {
                throw new LogicException('You cannot restrict extensions AND exclude extension at the same time');
            }
        }

        $this->extensionsToggle = (boolean)$restrict;

        $this->extensions = array_merge($this->extensions, (array)$extensions);

        return $this;
    }

    /**
     * Toggle to enable follow Symbolic Links
     *
     * @return Reader
     */
    public function followSymLinks(): self
    {
        $this->resetResults();
        $this->followSymLinks = true;

        return $this;
    }

    /**
     * Ignore files starting with a dot (.)
     *
     * Folders starting with a dot are always exluded due to exiftool behaviour.
     * You should include them manually
     *
     * @return Reader
     */
    public function ignoreDotFiles(): self
    {
        $this->resetResults();
        $this->ignoreDotFile = true;

        return $this;
    }

    /**
     * Disable recursivity in directories scan.
     * If you only specify files, this toggle has no effect
     *
     * @return Reader
     */
    public function notRecursive(): self
    {
        $this->resetResults();
        $this->recursive = false;

        return $this;
    }

    /**
     * Return the first result. If no result available, null is returned
     *
     * @return FileEntity
     * @throws Exception
     */
    public function getOneOrNull(): ?FileEntity
    {
        return count($this->all()) === 0 ? null : $this->all()->first();
    }

    /**
     * Return the first result. If no result available, throws an exception
     *
     * @return FileEntity
     * @throws EmptyCollectionException
     * @throws Exception
     */
    public function first(): FileEntity
    {
        if (count($this->all()) === 0) {
            throw new EmptyCollectionException('Collection is empty');
        }

        return $this->all()->first();
    }

    /**
     * Perform the scan and returns all the results
     *
     * @return ArrayCollection
     * @throws Exception
     */
    public function all(): ?ArrayCollection
    {
        if (!$this->collection) {
            $this->collection = $this->buildQueryAndExecute();
        }

        if ($this->readers) {
            $elements = $this->collection->toArray();

            $this->collection = null;

            foreach ($this->readers as $reader) {
                $elements = array_merge($elements, $reader->all()->toArray());
            }

            $this->collection = new ArrayCollection($elements);
        }

        return $this->collection;
    }

    /**
     * Reset any computed result
     *
     * @return Reader
     */
    protected function resetResults(): self
    {
        $this->collection = null;

        return $this;
    }

    /**
     * Build the command returns an ArrayCollection of FileEntity
     *
     * @return ArrayCollection
     * @throws Exception
     */
    protected function buildQueryAndExecute(): ArrayCollection
    {
        $result = '';

        try {
            $result = trim($this->exiftool->executeCommand($this->buildQuery(), $this->timeout));
        }
        catch (RuntimeException $e) {
            /**
             * In case no file found, an exit code 1 is returned
             */
            if (!$this->ignoreDotFile) {
                throw $e;
            }
        }

        if ($result === '') {
            return new ArrayCollection();
        }

        $this->parser->open($result);

        return $this->parser->ParseEntities();
    }

    /**
     * Compute raw exclude rules to simple ones, based on exclude dirs and search dirs
     *
     * @param string[] $rawExcludeDirs
     * @param string[] $rawSearchDirs
     * @return array
     * @throws RuntimeException
     */
    protected function computeExcludeDirs(array $rawExcludeDirs, array $rawSearchDirs): array
    {
        $excludeDirs = [];

        foreach ($rawExcludeDirs as $excludeDir) {
            $found = false;
            /**
             * is this a relative path ?
             */
            foreach ($rawSearchDirs as $dir) {
                $currentPrefix = realpath($dir) . DIRECTORY_SEPARATOR;

                $supposedExcluded = str_replace($currentPrefix, '', realpath($currentPrefix . $excludeDir));

                if (!$supposedExcluded) {
                    continue;
                }

                if (strpos($supposedExcluded, DIRECTORY_SEPARATOR) === false) {
                    $excludeDirs[] = $supposedExcluded;
                    $found = true;
                    break;
                }
            }

            if ($found) {
                continue;
            }

            /**
             * is this an absolute path ?
             */
            $supposedExcluded = realpath($excludeDir);

            if ($supposedExcluded) {
                foreach ($rawSearchDirs as $dir) {
                    $searchDir = realpath($dir) . DIRECTORY_SEPARATOR;

                    $supposedRelative = str_replace($searchDir, '', $supposedExcluded);

                    if (strpos($supposedRelative, DIRECTORY_SEPARATOR) !== false) {
                        continue;
                    }

                    if (strpos($supposedExcluded, $searchDir) !== 0) {
                        continue;
                    }

                    if (!trim($supposedRelative)) {
                        continue;
                    }

                    $excludeDirs[] = $supposedRelative;
                    $found = true;
                    break;
                }
            }


            if (!$found) {
                throw new RuntimeException(sprintf("Invalid exclude dir %s ; Exclude dir is limited to the name of a directory at first depth", $excludeDir));
            }
        }

        return $excludeDirs;
    }

    /**
     * Build query from criterias
     *
     * @return string[]
     *
     * @throws LogicException
     */
    protected function buildQuery(): array
    {
        if (!$this->dirs && !$this->files) {
            throw new LogicException('You have not set any files or directory');
        }

        $command = [
            '-n',               // disable print conversion
            '-q',               // quiet
            '-b',               // some binary
            '-X',               // XML
            '-charset', 'UTF8'
        ];
//        $command = [
//            '-n',
//            '-q',
//            '-b',
//            '-j',               // json
//            '-D',               // decimal tag id
//            '-t',               // add table info
//            '-charset', 'UTF8'
//        ];

        if ($this->recursive) {
            $command[] = '-r';
        }

        if (!empty($this->extensions)) {
            if (!$this->extensionsToggle) {
                $extensionPrefix = '--ext';
            }
            else {
                $extensionPrefix = '-ext';
            }

            foreach ($this->extensions as $extension) {
                $command[] = $extensionPrefix;
                $command[] = $extension;
            }
        }

        if (!$this->followSymLinks) {
            $command[] = '-i';
            $command[] = 'SYMLINKS';
        }

        if ($this->ignoreDotFile) {
            $command[] = '-if';
            $command[] = "'\$filename !~ /^\./'";
        }

        foreach ($this->sort as $sort) {
            $command[] = '-fileOrder';
            $command[] = $sort;
        }

        foreach ($this->computeExcludeDirs($this->excludeDirs, $this->dirs) as $excludedDir) {
            $command[] = '-i';
            $command[] = $excludedDir;
        }

        foreach ($this->dirs as $dir) {
            $command[] = realpath($dir);
        }

        foreach ($this->files as $file) {
            $command[] = realpath($file);
        }

        return $command;
    }
}
