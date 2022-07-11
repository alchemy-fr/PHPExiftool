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
class ExposureIndex extends AbstractTagGroup
{

  protected string $id = 'ExifIFD:ExposureIndex';

  protected string $name = 'ExposureIndex';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Exposure Index',
    'fr' => 'Indice d\'exposition',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Exif::Main
       * line : 115840
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Exif::Main.ExifIFD:ExposureIndex',
      'desc' => [
        'en' => 'Exposure Index',
        'fr' => 'Indice d\'exposition',
      ],
    ],
    1 => [
      /**
       * table_name : Exif::Main
       * line : 117110
       * type : rational64u
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'Exif::Main.ExifIFD:ExposureIndex',
      'desc' => [
        'en' => 'Exposure Index',
        'fr' => 'Indice d\'exposition',
      ],
    ],
  ];

}
