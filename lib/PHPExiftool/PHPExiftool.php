<?php

namespace PHPExiftool;

use Psr\Log\NullLogger;

class PHPExiftool
{
    const v = 7;

    public static function getKnownTagGroups(): array
    {
        return include __DIR__ . "/Driver/TagGroup/index.php";
    }

    public static function isClassesGenerated(): bool
    {
        return file_exists(__DIR__ . "/Driver/TagGroup/index.php");
    }

    public static function generateClasses(array $options, array $lngs = ['en']): void
    {
        $dumper = new InformationDumper(new Exiftool(new NullLogger()));

        $dumper->dumpClasses($options, $lngs);
    }

    public static function tagGroupIdToClassname(string $tagGroupId): string
    {
        return 'PHPExiftool\\Driver\\TagGroup\\' . InformationDumper::tagGroupIdToFQClassname($tagGroupId);
    }
}