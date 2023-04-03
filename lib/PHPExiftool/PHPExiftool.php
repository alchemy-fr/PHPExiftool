<?php

namespace PHPExiftool;

use PHPExiftool\Driver\TagGroupFactory;
use Psr\Log\LoggerInterface;
use Psr\Log\NullLogger;
use PHPExiftool\Exception\DirectoryNotFoundException;

class PHPExiftool
{
    const v = "3.1.2";
    const ROOT_NAMESPACE = "PHPExiftool\\Driver";
    const SUBDIR = "TagGroup";

    private string $classesRootDirectory;
    private LoggerInterface $logger;
    private Factory $factory;

    public function __construct(string $classesRootDirectory, ?LoggerInterface $logger = null)
    {
        $c = substr($classesRootDirectory, 0, 1);
        if($c !== '/') {
            throw new DirectoryNotFoundException(sprintf("classesRootDirectory must be absolute, \"%s\" given", $classesRootDirectory));
        }
        if(!file_exists($classesRootDirectory) || !is_writable($classesRootDirectory)) {
            throw new DirectoryNotFoundException(sprintf("classesRootDirectory \"%s\" must exists and be writable", $classesRootDirectory));
        }

        $this->classesRootDirectory = realpath($classesRootDirectory);
        if($logger === null) {
            $logger = new NullLogger();
        }
        $this->logger = $logger;
        $this->factory = new Factory($this);
    }


    public function setLogger(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }


    public function generateClasses(array $options, array $lngs = ['en']): void
    {
        $dumper = new InformationDumper(new Exiftool(new NullLogger()), $this->classesRootDirectory);

        $dumper->dumpClasses($options, $lngs);
    }

    public function isClassesGenerated(): bool
    {
        $p = $this->classesRootDirectory . '/' . self::SUBDIR . "/Helper.php";
        return file_exists($p);
    }

    /**
     * @return Factory
     */
    public function getFactory(): Factory
    {
        return $this->factory;
    }

    /**
     * @return LoggerInterface|NullLogger|null
     */
    public function getLogger()
    {
        return $this->logger;
    }

    /**
     * @return string
     */
    public function getClassesRootDirectory(): string
    {
        return $this->classesRootDirectory;
    }
}
