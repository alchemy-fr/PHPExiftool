<?php

use PHPExiftool\InformationDumper;
use PHPExiftool\PHPExiftool;

require dirname(__DIR__).'/vendor/autoload.php';

// build the phpexiftool classes (taggroups)
$x = new PHPExiftool("/tmp");
if (!$x->isClassesGenerated()) {
    $x->generateClasses([InformationDumper::LISTOPTION_MWG], ['en']);
}
