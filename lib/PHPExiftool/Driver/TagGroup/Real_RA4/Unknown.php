<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Real_RA4;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Unknown extends AbstractTagGroup
{

  protected string $id = 'Real-RA4:Unknown';

  protected string $name = 'Unknown';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Unknown',
    'fr' => 'Inconnu',
  ];

  protected int $count = 0;

  protected int $flags = 32;

  protected array $tags = [
    0 => [
      /**
       * table_name : Real::AudioV4
       * line : 330127
       * type : int32u
       * writable : false
       * count : 
       * flags : Unknown
       */
      'id' => 'Real::AudioV4.Real-RA4:Unknown',
      'desc' => [
        'en' => 'Unknown',
        'fr' => 'Inconnu',
      ],
    ],
    1 => [
      /**
       * table_name : Real::AudioV4
       * line : 330151
       * type : int16u
       * writable : false
       * count : 
       * flags : Unknown
       */
      'id' => 'Real::AudioV4.Real-RA4:Unknown',
      'desc' => [
        'en' => 'Unknown',
        'fr' => 'Inconnu',
      ],
    ],
    2 => [
      /**
       * table_name : Real::AudioV4
       * line : 330169
       * type : int16u
       * writable : false
       * count : 
       * flags : Unknown
       */
      'id' => 'Real::AudioV4.Real-RA4:Unknown',
      'desc' => [
        'en' => 'Unknown',
        'fr' => 'Inconnu',
      ],
    ],
    3 => [
      /**
       * table_name : Real::AudioV4
       * line : 330218
       * type : int8u
       * writable : false
       * count : 
       * flags : Unknown
       */
      'id' => 'Real::AudioV4.Real-RA4:Unknown',
      'desc' => [
        'en' => 'Unknown',
        'fr' => 'Inconnu',
      ],
    ],
    4 => [
      /**
       * table_name : Real::AudioV4
       * line : 330230
       * type : int16u
       * writable : false
       * count : 
       * flags : Unknown
       */
      'id' => 'Real::AudioV4.Real-RA4:Unknown',
      'desc' => [
        'en' => 'Unknown',
        'fr' => 'Inconnu',
      ],
    ],
  ];

}
