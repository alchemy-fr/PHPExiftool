<?php

namespace PHPExiftool;

use Psr\Log\NullLogger;

class PHPExiftool
{
    const v = "3.0.0";

    public static function generateClasses(array $options, array $lngs = ['en'], ?string $rootPath = null, ?string $rootNamesapce = null): void
    {
        $dumper = new InformationDumper(new Exiftool(new NullLogger()), $rootPath, $rootNamesapce);

        $dumper->dumpClasses($options, $lngs);
    }
}
