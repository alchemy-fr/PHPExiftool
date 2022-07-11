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
class Saturation extends AbstractTagGroup
{

  protected string $id = 'ExifIFD:Saturation';

  protected string $name = 'Saturation';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Saturation',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Exif::Main
       * line : 117937
       * type : int16u
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'Exif::Main.ExifIFD:Saturation',
      'desc' => [
        'en' => 'Saturation',
      ],
    ],
    1 => [
      /**
       * table_name : Exif::Main
       * line : 121266
       * type : string
       * writable : true
       * count : 
       * flags : Avoid
       */
      'id' => 'Exif::Main.ExifIFD:Saturation',
      'desc' => [
        'en' => 'Saturation',
      ],
    ],
  ];

}
