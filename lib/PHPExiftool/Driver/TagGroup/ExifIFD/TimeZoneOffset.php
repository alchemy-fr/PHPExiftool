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
class TimeZoneOffset extends AbstractTagGroup
{

  protected string $id = 'ExifIFD:TimeZoneOffset';

  protected string $name = 'TimeZoneOffset';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Time Zone Offset',
    'fr' => 'Offset de zone de date',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Exif::Main
       * line : 114194
       * type : int16s
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'Exif::Main.ExifIFD:TimeZoneOffset',
      'desc' => [
        'en' => 'Time Zone Offset',
        'fr' => 'Offset de zone de date',
      ],
    ],
  ];

}
