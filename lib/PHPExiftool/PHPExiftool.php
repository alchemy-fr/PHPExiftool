<?php

namespace PHPExiftool;

class PHPExiftool
{
    public static function getKnownTagGroups()
    {
        return include __DIR__ . "/Driver/TagGroup/index.php";
    }
}