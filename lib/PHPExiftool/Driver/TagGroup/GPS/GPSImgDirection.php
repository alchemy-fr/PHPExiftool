<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\GPS;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class GPSImgDirection extends AbstractTagGroup
{

  protected string $id = 'GPS:GPSImgDirection';

  protected string $name = 'GPSImgDirection';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'GPS Img Direction',
    'fr' => 'Direction de l\'image',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : GPS::Main
       * line : 132646
       * type : rational64u
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'GPS::Main.GPS:GPSImgDirection',
      'desc' => [
        'en' => 'GPS Img Direction',
        'fr' => 'Direction de l\'image',
      ],
    ],
    1 => [
      /**
       * table_name : H264::MDPM
       * line : 142236
       * type : rational32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'H264::MDPM.GPS:GPSImgDirection',
      'desc' => [
        'en' => 'GPS Img Direction',
        'fr' => 'Direction de l\'image',
      ],
    ],
    2 => [
      /**
       * table_name : Nikon::NCTG
       * line : 203412
       * type : ?
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::NCTG.GPS:GPSImgDirection',
      'desc' => [
        'en' => 'GPS Img Direction',
        'fr' => 'Direction de l\'image',
      ],
    ],
  ];

}
