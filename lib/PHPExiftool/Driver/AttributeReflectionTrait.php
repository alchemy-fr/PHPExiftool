<?php
namespace PHPExiftool\Driver;

use Exception;
use ReflectionClass;
use ReflectionType;

trait AttributeReflectionTrait
{
    static function getAttributeType(string $key): ?ReflectionType
    {
        static $rc = null;
        static $attrTypes = null;

        if(is_null($rc)) {
            $rc = new ReflectionClass(self::class);
            $attrTypes = [];
        }
        if(!array_key_exists($key, $attrTypes)) {
            $attrTypes[$key] = null;
            try {
                $attrTypes[$key] = $rc->getProperty($key)->getType();
            }
            catch (Exception $e) {
                // no-op
            }
        }
        return $attrTypes[$key];
    }

}