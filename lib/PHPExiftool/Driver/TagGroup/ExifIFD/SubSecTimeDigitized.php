<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\ExifIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SubSecTimeDigitized extends AbstractTagGroup
{

  protected string $id = 'ExifIFD:SubSecTimeDigitized';

  protected string $name = 'SubSecTimeDigitized';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Sub Sec Time Digitized',
    'fr' => 'Fractions de seconde de DateTimeDigitized',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Exif::Main
       * line : 116609
       * type : string
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'Exif::Main.ExifIFD:SubSecTimeDigitized',
      'desc' => [
        'en' => 'Sub Sec Time Digitized',
        'fr' => 'Fractions de seconde de DateTimeDigitized',
      ],
    ],
  ];

}
