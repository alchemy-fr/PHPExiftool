<?php

namespace PHPExiftool;

use PHPExiftool\Driver\TagGroupFactory;
use Psr\Log\LoggerInterface;
use Psr\Log\NullLogger;

class PHPExiftool
{
    const v = "3.1.0";
    const ROOT_NAMESPACE = "PHPExiftool\\Driver";
    const SUBDIR = "TagGroup";

    private string $classesRootDirectory;
    private LoggerInterface $logger;
    private Factory $factory;

    public function __construct(string $classesRootDirectory, ?LoggerInterface $logger = null)
    {
        $this->classesRootDirectory = $classesRootDirectory;
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

    public function getWriter()
    {
        return Writer::create(new Exiftool($this->logger));
    }

    public function createTagGroup($tagGroupId)
    {
        return TagGroupFactory::getFromRDFTagname($this->classesRootDirectory, $tagGroupId, $this->logger);
    }

    public function isClassesGenerated(): bool
    {
        $p = PHPExiftool::getAbsoluteRootPathDirectory($this->classesRootDirectory) . '/' . self::SUBDIR . "/Helper.php";
        return file_exists($p);
    }

    public static function tagGroupIdToClassname(string $tagGroupId): string
    {
        return 'PHPExiftool\\Driver\\TagGroup\\' . InformationDumper::tagGroupIdToFQClassname($tagGroupId);
    }

    public static function getAbsoluteRootPathDirectory(string $classesRootDirectory, $create = false)
    {
        $c = substr(($absClassesRootDirectory = $classesRootDirectory), 0, 1);
        if($c !== '/') {
            // relative path
            $absClassesRootDirectory = __DIR__ . '/' . $absClassesRootDirectory;
        }
        if(!file_exists($absClassesRootDirectory) && $create) {
            @mkdir($absClassesRootDirectory, 0754, true);
        }

        return realpath($absClassesRootDirectory);
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
