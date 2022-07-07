<?php

namespace PHPExiftool\ClassUtils;

class ClassProperty
{
    const PUBLIC = "public";
    const PROTECTED = "protected";
    const PRIVATE = "private";

    private string $name;
    private string $visibility = self::PRIVATE;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function setVisibility(string $visibility)
    {
        if(!in_array($visibility, [self::PRIVATE, self::PROTECTED, self::PUBLIC])) {
            throw new \TypeError(sprintf("Bad visibility \"%s\" for attribute \"%s\"", $visibility, $this->name));
        }
        $this->visibility = $visibility;
    }

}