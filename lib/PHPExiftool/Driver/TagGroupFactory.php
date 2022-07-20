<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver;

use PHPExiftool\Exception\TagUnknown;
use PHPExiftool\InformationDumper;
use PHPExiftool\Tool\Command\ClassesBuilder;

/**
 * Metadata Object for mapping a TagGroup to a value
 *
 * @author      Romain Neutron - imprec@gmail.com
 * @license     http://opensource.org/licenses/MIT MIT
 */
class TagGroupFactory
{

    /**
     * Build a TagGroup based on his Tagname
     *
     * @param  string       $tagname
     * @return TagGroupInterface
     * @throws TagUnknown
     */
    public static function getFromRDFTagname(string $tagname): TagGroupInterface
    {
        $classname = static::classnameFromTagname($tagname);

        if ( ! class_exists($classname)) {
            throw new TagUnknown(sprintf('Unknown tag %s', $tagname));
        }

        return new $classname;
    }

    public static function hasFromRDFTagname(string $tagname): bool
    {
        return class_exists(static::classnameFromTagname($tagname));
    }

    protected static function classnameFromTagname(string $tagname): string
    {
        $tagname = str_replace('/rdf:RDF/rdf:Description/', '', $tagname);

        $classname = '\\PHPExiftool\\Driver\\TagGroup\\' . str_replace(':', '\\', $tagname);

        return InformationDumper::generateNamespace($classname);
    }
}
