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
use Psr\Log\LoggerInterface;

/**
 * Metadata Object for mapping a TagGroup to a value
 *
 * @author      Romain Neutron - imprec@gmail.com
 * @license     http://opensource.org/licenses/MIT MIT
 */
class TagGroupFactory
{

    /**
     * Build a TagGroup object based on his id
     *
     * @param string $tagname
     * @param LoggerInterface|null $logger
     * @return TagGroupInterface
     * @throws TagUnknown
     */
    public static function getFromRDFTagname(string $tagname, ?LoggerInterface $logger = null): TagGroupInterface
    {
        $classname = static::classnameFromRDFTagname($tagname, $logger);

        if($logger) {
            $logger->debug(sprintf("classnameFromRDFTagname(\"%s\") ==> \"%s\"", $tagname, $classname));
        }

        if ( ! class_exists($classname)) {
            throw new TagUnknown(sprintf("Unknown tag \"%s\" (class \"%s\" not found)", $tagname, $classname));
        }

        return new $classname;
    }

    public static function hasFromRDFTagname(string $tagname): bool
    {
        return class_exists(static::classnameFromRDFTagname($tagname));
    }

    protected static function classnameFromRDFTagname(string $RdfName, ?LoggerInterface $logger = null): string
    {
        $id = str_replace('/rdf:RDF/rdf:Description/', '', $RdfName);
        $FQClassname = InformationDumper::tagGroupIdToFQClassname($id);

        if($logger) {
            $logger->debug(sprintf("tag id(\"%s\") ==> \"%s\" ; tagGroupIdToFQClassname(\"%s\") ==> \"%s\" ", $RdfName, $id, $id, $FQClassname));
        }

        return '\\PHPExiftool\\Driver\\TagGroup\\' . InformationDumper::tagGroupIdToFQClassname($id);
    }
}
