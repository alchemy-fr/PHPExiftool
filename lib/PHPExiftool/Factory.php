<?php

namespace PHPExiftool;

use PHPExiftool\Driver\HelperInterface;
use PHPExiftool\Driver\TagGroupFactory;
use PHPExiftool\Driver\TagGroupInterface;

class Factory
{
    private PHPExiftool $phpExiftool;

    public function __construct(PHPExiftool $phpExiftool)
    {
        $this->phpExiftool = $phpExiftool;
    }

    public function createReader(): Reader
    {
        return Reader::create(
            new Exiftool($this->phpExiftool->getLogger()),
            new RDFParser($this->phpExiftool->getClassesRootDirectory(), $this->phpExiftool->getLogger())
        );
    }

    public function createWriter(): Writer
    {
        return Writer::create(
            new Exiftool($this->phpExiftool->getLogger())
        );
    }

    public function createTagGroup(string $tagName): TagGroupInterface
    {
        return TagGroupFactory::getFromRDFTagname(
            $this->phpExiftool->getClassesRootDirectory(),
            $tagName,
            $this->phpExiftool->getLogger()
        );
    }

    public function getHelper(): HelperInterface
    {
        return TagGroupFactory::loadClass(
            $this->phpExiftool->getClassesRootDirectory(),
            "TagGroup\\Helper",
            $this->phpExiftool->getLogger()
        );
    }
}
