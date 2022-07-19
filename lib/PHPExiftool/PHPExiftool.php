<?php

namespace PHPExiftool;

use Psr\Log\NullLogger;

class PHPExiftool
{
    const v = 1;

    public static function getKnownTagGroups()
    {
        return include __DIR__ . "/Driver/TagGroup/index.php";
    }

    public static function isClassesGenerated()
    {
        return file_exists(__DIR__ . "/Driver/TagGroup/index.php");
    }

    public static function generateClasses(bool $withMwg = true, array $lngs = ['en'])
    {
        $options = [];
        if ($withMwg) {
            $options[] = InformationDumper::LISTOPTION_MWG;
        }

        $dumper = new InformationDumper(new Exiftool(new NullLogger()));

        $dumper->dumpClasses($lngs);
    }
}