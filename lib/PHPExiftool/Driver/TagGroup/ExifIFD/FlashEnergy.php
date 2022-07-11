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
class FlashEnergy extends AbstractTagGroup
{

  protected string $id = 'ExifIFD:FlashEnergy';

  protected string $name = 'FlashEnergy';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Flash Energy',
    'fr' => 'Énergie du flash',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Exif::Main
       * line : 115549
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Exif::Main.ExifIFD:FlashEnergy',
      'desc' => [
        'en' => 'Flash Energy',
        'fr' => 'Énergie du flash',
      ],
    ],
    1 => [
      /**
       * table_name : Exif::Main
       * line : 116890
       * type : rational64u
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'Exif::Main.ExifIFD:FlashEnergy',
      'desc' => [
        'en' => 'Flash Energy',
        'fr' => 'Énergie du flash',
      ],
    ],
  ];

}
