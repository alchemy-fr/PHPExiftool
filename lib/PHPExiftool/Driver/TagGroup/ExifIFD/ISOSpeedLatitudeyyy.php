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
class ISOSpeedLatitudeyyy extends AbstractTagGroup
{

  protected string $id = 'ExifIFD:ISOSpeedLatitudeyyy';

  protected string $name = 'ISOSpeedLatitudeyyy';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'ISO Speed Latitude yyy',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Exif::Main
       * line : 114291
       * type : int32u
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'Exif::Main.ExifIFD:ISOSpeedLatitudeyyy',
      'desc' => [
        'en' => 'ISO Speed Latitude yyy',
      ],
    ],
  ];

}
