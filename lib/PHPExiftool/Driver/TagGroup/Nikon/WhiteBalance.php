<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class WhiteBalance extends AbstractTagGroup
{

  protected string $id = 'Nikon:WhiteBalance';

  protected string $name = 'WhiteBalance';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'White Balance',
    'fr' => 'Balance des blancs',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::AVITags
       * line : 192165
       * type : string
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::AVITags.Nikon:WhiteBalance',
      'desc' => [
        'en' => 'White Balance',
        'fr' => 'Balance des blancs',
      ],
    ],
    1 => [
      /**
       * table_name : Nikon::MOV
       * line : 196747
       * type : int16u
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::MOV.Nikon:WhiteBalance',
      'desc' => [
        'en' => 'White Balance',
        'fr' => 'Balance des blancs',
      ],
    ],
    2 => [
      /**
       * table_name : Nikon::Main
       * line : 196985
       * type : string
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::Main.Nikon:WhiteBalance',
      'desc' => [
        'en' => 'White Balance',
        'fr' => 'Balance des blancs',
      ],
    ],
    3 => [
      /**
       * table_name : Nikon::NCTG
       * line : 203477
       * type : ?
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::NCTG.Nikon:WhiteBalance',
      'desc' => [
        'en' => 'White Balance',
        'fr' => 'Balance des blancs',
      ],
    ],
    4 => [
      /**
       * table_name : Nikon::Type2
       * line : 209836
       * type : ?
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::Type2.Nikon:WhiteBalance',
      'desc' => [
        'en' => 'White Balance',
        'fr' => 'Balance des blancs',
      ],
    ],
  ];

}
