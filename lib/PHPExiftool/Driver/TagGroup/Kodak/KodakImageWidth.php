<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Kodak;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class KodakImageWidth extends AbstractTagGroup
{

  protected string $id = 'Kodak:KodakImageWidth';

  protected string $name = 'KodakImageWidth';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Kodak Image Width',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Kodak::CameraInfo
       * line : 154714
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Kodak::CameraInfo.Kodak:KodakImageWidth',
      'desc' => [
        'en' => 'Kodak Image Width',
      ],
    ],
    1 => [
      /**
       * table_name : Kodak::Main
       * line : 158092
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Kodak::Main.Kodak:KodakImageWidth',
      'desc' => [
        'en' => 'Kodak Image Width',
      ],
    ],
    2 => [
      /**
       * table_name : Kodak::SubIFD0
       * line : 159152
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Kodak::SubIFD0.Kodak:KodakImageWidth',
      'desc' => [
        'en' => 'Kodak Image Width',
      ],
    ],
    3 => [
      /**
       * table_name : Kodak::SubIFD0
       * line : 159248
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Kodak::SubIFD0.Kodak:KodakImageWidth',
      'desc' => [
        'en' => 'Kodak Image Width',
      ],
    ],
    4 => [
      /**
       * table_name : Kodak::TextualInfo
       * line : 160175
       * type : ?
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Kodak::TextualInfo.Kodak:KodakImageWidth',
      'desc' => [
        'en' => 'Kodak Image Width',
      ],
    ],
    5 => [
      /**
       * table_name : Kodak::Type2
       * line : 160354
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Kodak::Type2.Kodak:KodakImageWidth',
      'desc' => [
        'en' => 'Kodak Image Width',
      ],
    ],
  ];

}
