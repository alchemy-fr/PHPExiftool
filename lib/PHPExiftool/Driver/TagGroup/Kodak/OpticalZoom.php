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
class OpticalZoom extends AbstractTagGroup
{

  protected string $id = 'Kodak:OpticalZoom';

  protected string $name = 'OpticalZoom';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Optical Zoom',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Kodak::SubIFD0
       * line : 159229
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Kodak::SubIFD0.Kodak:OpticalZoom',
      'desc' => [
        'en' => 'Optical Zoom',
      ],
    ],
    1 => [
      /**
       * table_name : Kodak::SubIFD2
       * line : 159459
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Kodak::SubIFD2.Kodak:OpticalZoom',
      'desc' => [
        'en' => 'Optical Zoom',
      ],
    ],
    2 => [
      /**
       * table_name : Kodak::SubIFD2
       * line : 159622
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Kodak::SubIFD2.Kodak:OpticalZoom',
      'desc' => [
        'en' => 'Optical Zoom',
      ],
    ],
    3 => [
      /**
       * table_name : Kodak::SubIFD3
       * line : 159681
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Kodak::SubIFD3.Kodak:OpticalZoom',
      'desc' => [
        'en' => 'Optical Zoom',
      ],
    ],
    4 => [
      /**
       * table_name : Kodak::SubIFD5
       * line : 159755
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Kodak::SubIFD5.Kodak:OpticalZoom',
      'desc' => [
        'en' => 'Optical Zoom',
      ],
    ],
    5 => [
      /**
       * table_name : Kodak::Type3
       * line : 160384
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Kodak::Type3.Kodak:OpticalZoom',
      'desc' => [
        'en' => 'Optical Zoom',
      ],
    ],
    6 => [
      /**
       * table_name : Kodak::Type5
       * line : 160610
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Kodak::Type5.Kodak:OpticalZoom',
      'desc' => [
        'en' => 'Optical Zoom',
      ],
    ],
    7 => [
      /**
       * table_name : Kodak::Type6
       * line : 160797
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Kodak::Type6.Kodak:OpticalZoom',
      'desc' => [
        'en' => 'Optical Zoom',
      ],
    ],
  ];

}
