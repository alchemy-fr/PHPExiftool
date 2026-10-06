# PHP-Exiftool

[![CI](https://github.com/alchemy-fr/PHPExiftool/actions/workflows/ci.yml/badge.svg)](https://github.com/alchemy-fr/PHPExiftool/actions/workflows/ci.yml)

This project is a fork of [phpexiftool/phpexiftool](https://github.com/phpexiftool/phpexiftool).

PHP Exiftool is an Object Oriented driver for Phil Harvey's Exiftool (see
http://www.sno.phy.queensu.ca/~phil/exiftool/).
Exiftool is a powerful library and command line utility for reading, writing
and editing meta information written in Perl.

PHPExiftool provides an intuitive object oriented interface to read and write
metadata.

You will find some example below.
This driver is not suitable for production, it is still under heavy development.

## Installation

The recommended way to install PHP-Exiftool is [through composer](http://getcomposer.org).

```JSON
{
    "require": {
        "alchemy/phpexiftool": "^4.0"
    }
}
```

## Usage

PHPExiftool generates one PHP class per exiftool tag group. Those classes are generated
once, into a writable directory of your choice:

```php
<?php

require __DIR__ . '/vendor/autoload.php';

use PHPExiftool\InformationDumper;
use PHPExiftool\PHPExiftool;

$phpExiftool = new PHPExiftool('/path/to/classes', $logger /* optional PSR-3 logger */);

if (!$phpExiftool->isClassesGenerated()) {
    $phpExiftool->generateClasses([InformationDumper::LISTOPTION_MWG], ['en']);
}
```

Classes can also be generated with the command line tool:

```bash
bin/console classes-builder --path=/path/to/classes --with-mwg --lng=en
```

### Exiftool Reader

A simple example : how to read metadata from a file:

```php
use PHPExiftool\Driver\Value\ValueInterface;

$reader = $phpExiftool->getFactory()->createReader();

$fileEntity = $reader->files('image.jpg')->first();

foreach ($fileEntity as $metadata) {
    if (ValueInterface::TYPE_BINARY === $metadata->getValue()->getType()) {
        echo sprintf("\t--> Field %s has binary data" . PHP_EOL, $metadata->getTagGroup());
    } else {
        echo sprintf("\t--> Field %s has value(s) %s" . PHP_EOL, $metadata->getTagGroup(), $metadata->getValue()->asString());
    }
}
```

An example with directory inspection :

```php
$reader = $phpExiftool->getFactory()->createReader();

$reader
  ->in(['documents', '/Picture'])
  ->extensions(['doc', 'jpg', 'cr2', 'dng'])
  ->exclude(['test', 'tmp'])
  ->followSymLinks();

foreach ($reader as $fileEntity) {
    echo "found file " . $fileEntity->getFile() . PHP_EOL;

    foreach ($fileEntity as $metadata) {
        echo sprintf("\t--> Field %s has value(s) %s" . PHP_EOL, $metadata->getTagGroup(), $metadata->getValue()->asString());
    }
}
```

### Exiftool Writer

```php
use PHPExiftool\Driver\Metadata\Metadata;
use PHPExiftool\Driver\Metadata\MetadataBag;
use PHPExiftool\Driver\Value\Mono;

$factory = $phpExiftool->getFactory();
$writer = $factory->createWriter();

$bag = new MetadataBag();
$bag->add(new Metadata($factory->createTagGroup('IPTC:ObjectName'), new Mono('Pretty cool subject')));

$writer->write('image.jpg', $bag);
```

## License

Project licensed under the MIT License
