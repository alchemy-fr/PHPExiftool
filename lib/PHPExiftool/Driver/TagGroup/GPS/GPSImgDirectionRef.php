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
class GPSImgDirectionRef extends AbstractTagGroup
{

  protected string $id = 'GPS:GPSImgDirectionRef';

  protected string $name = 'GPSImgDirectionRef';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'GPS Img Direction Ref',
    'fr' => 'Référence pour la direction l\'image',
  ];

  protected int $count = 2;

  protected array $tags = [
    0 => [
      /**
       * table_name : GPS::Main
       * line : 132600
       * type : string
       * writable : true
       * count : 2
       * flags : 
       */
      'id' => 'GPS::Main.GPS:GPSImgDirectionRef',
      'desc' => [
        'en' => 'GPS Img Direction Ref',
        'fr' => 'Référence pour la direction l\'image',
      ],
    ],
    1 => [
      /**
       * table_name : H264::MDPM
       * line : 142190
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'H264::MDPM.GPS:GPSImgDirectionRef',
      'desc' => [
        'en' => 'GPS Img Direction Ref',
        'fr' => 'Référence pour la direction l\'image',
      ],
    ],
    2 => [
      /**
       * table_name : Nikon::NCTG
       * line : 203366
       * type : ?
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::NCTG.GPS:GPSImgDirectionRef',
      'desc' => [
        'en' => 'GPS Img Direction Ref',
        'fr' => 'Référence pour la direction l\'image',
      ],
    ],
  ];

}
