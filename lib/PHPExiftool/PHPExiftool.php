<?php

namespace PHPExiftool;

use Psr\Log\NullLogger;

class PHPExiftool
{
    const v = "3.0.0";
    const ROOT_NAMESPACE = "PHPExiftool\\Driver";
    const SUBDIR = "TagGroup";

    public static function generateClasses(array $options, array $lngs = ['en'], ?string $rootPath = null): void
    {
        $dumper = new InformationDumper(new Exiftool(new NullLogger()), $rootPath);

        $dumper->dumpClasses($options, $lngs);
    }
}
