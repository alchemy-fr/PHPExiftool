<?php

namespace PHPExiftool;

use Psr\Log\NullLogger;

class PHPExiftool
{
    const v = 4;

    public static function getKnownTagGroups()
    {
        return include __DIR__ . "/Driver/TagGroup/index.php";
    }

    public static function isClassesGenerated()
    {
        return file_exists(__DIR__ . "/Driver/TagGroup/index.php");
    }

    public static function generateClasses(array $options, array $lngs = ['en'])
    {
        $dumper = new InformationDumper(new Exiftool(new NullLogger()));

        $dumper->dumpClasses($options, $lngs);
    }
}