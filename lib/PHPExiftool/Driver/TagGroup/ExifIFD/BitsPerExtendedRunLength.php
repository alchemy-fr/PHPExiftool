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
class BitsPerExtendedRunLength extends AbstractTagGroup
{

  protected string $id = 'ExifIFD:BitsPerExtendedRunLength';

  protected string $name = 'BitsPerExtendedRunLength';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Bits Per Extended Run Length',
    'fr' => 'Bits par « Run Length » étendue',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Exif::Main
       * line : 113603
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Exif::Main.ExifIFD:BitsPerExtendedRunLength',
      'desc' => [
        'en' => 'Bits Per Extended Run Length',
        'fr' => 'Bits par « Run Length » étendue',
      ],
    ],
  ];

}
