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
use PHPExiftool\PHPExiftool;
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
     * load a class
     *
     * @param string $tagname
     * @param LoggerInterface|null $logger
     * @throws TagUnknown
     */
    public static function loadClass(string $classesRootDirectory, string $classname, ?LoggerInterface $logger = null)
    {
        $fullClassname = PHPExiftool::ROOT_NAMESPACE . '\\' . $classname;

        // class loader
        if ( !class_exists($fullClassname)) {
            $fpath = $classesRootDirectory . '/' . str_replace('\\', '/', $classname) . '.php';

            if ( !file_exists($fpath)) {
                throw new TagUnknown(sprintf("file \"%s\" not found for class \"%s\"", $fpath, $fullClassname));
            }

            include_once $fpath;

            if ( !class_exists($fullClassname)) {
                throw new TagUnknown(sprintf("class \"%s\" not found into \"%s\"", $fullClassname, $fpath));
            }
        }

        return new $fullClassname;
    }

    /**
     * Build a TagGroup object based on his id
     *
     * @param string $tagname
     * @param LoggerInterface|null $logger
     * @return TagGroupInterface
     * @throws TagUnknown
     */
    public static function getFromRDFTagname(string $classesRootDirectory, string $tagname, ?LoggerInterface $logger = null): TagGroupInterface
    {
        $classname = static::classnameFromRDFTagname($tagname, $logger);

        if($logger) {
            $logger->debug(sprintf("classnameFromRDFTagname(\"%s\") ==> \"%s\"", $tagname, $classname));
        }

        return self::loadClass($classesRootDirectory, $classname, $logger);
    }

    public static function hasFromRDFTagname(string $classesRootDirectory, string $tagname, ?LoggerInterface $logger = null): bool
    {
        $classname = PHPExiftool::ROOT_NAMESPACE . '\\' . static::classnameFromRDFTagname($tagname, $logger);

        // class loader
        if ( !class_exists($classname)) {
            $path = str_replace('\\', '/', InformationDumper::tagGroupIdToFQClassname($tagname));
            $fpath = $classesRootDirectory . '/' .PHPExiftool::SUBDIR . '/' . $path . '.php';

            if ( !file_exists($fpath)) {
                return false;
            }

            include_once $fpath;

            if ( !class_exists($classname)) {
                return false;
            }
        }

        return true;
    }

    protected static function classnameFromRDFTagname(string $RdfName, ?LoggerInterface $logger = null): string
    {
        $id = str_replace('/rdf:RDF/rdf:Description/', '', $RdfName);
        $FQClassname = InformationDumper::tagGroupIdToFQClassname($id);

        if($logger) {
            $logger->debug(sprintf("tag id(\"%s\") ==> \"%s\" ; tagGroupIdToFQClassname(\"%s\") ==> \"%s\" ", $RdfName, $id, $id, $FQClassname));
        }

        return PHPExiftool::SUBDIR . '\\' . InformationDumper::tagGroupIdToFQClassname($id);
    }
}
