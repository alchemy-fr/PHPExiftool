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
class BitsPerRunLength extends AbstractTagGroup
{

  protected string $id = 'ExifIFD:BitsPerRunLength';

  protected string $name = 'BitsPerRunLength';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Bits Per Run Length',
    'fr' => 'Bits par « Run Length »',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Exif::Main
       * line : 113594
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Exif::Main.ExifIFD:BitsPerRunLength',
      'desc' => [
        'en' => 'Bits Per Run Length',
        'fr' => 'Bits par « Run Length »',
      ],
    ],
  ];

}
