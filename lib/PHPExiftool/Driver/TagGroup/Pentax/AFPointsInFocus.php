<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Pentax;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AFPointsInFocus extends AbstractTagGroup
{

  protected string $id = 'Pentax:AFPointsInFocus';

  protected string $name = 'AFPointsInFocus';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'AF Points In Focus',
    'fr' => 'Points AF nets',
  ];

  protected int $count = 9;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Pentax::AFInfo
       * line : 283819
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Pentax::AFInfo.Pentax:AFPointsInFocus',
      'desc' => [
        'en' => 'AF Points In Focus',
        'fr' => 'Points AF nets',
      ],
    ],
    1 => [
      /**
       * table_name : Pentax::AFPointInfo
       * line : 283999
       * type : int8u
       * writable : false
       * count : 9
       * flags : Permanent
       */
      'id' => 'Pentax::AFPointInfo.Pentax:AFPointsInFocus',
      'desc' => [
        'en' => 'AF Points In Focus',
        'fr' => 'Points AF nets',
      ],
    ],
    2 => [
      /**
       * table_name : Pentax::Main
       * line : 297130
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Pentax::Main.Pentax:AFPointsInFocus',
      'desc' => [
        'en' => 'AF Points In Focus',
        'fr' => 'Points AF nets',
      ],
    ],
    3 => [
      /**
       * table_name : Pentax::Main
       * line : 297292
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Pentax::Main.Pentax:AFPointsInFocus',
      'desc' => [
        'en' => 'AF Points In Focus',
        'fr' => 'Points AF nets',
      ],
    ],
    4 => [
      /**
       * table_name : Pentax::Main
       * line : 299760
       * type : int32u
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Pentax::Main.Pentax:AFPointsInFocus',
      'desc' => [
        'en' => 'AF Points In Focus',
        'fr' => 'Points AF nets',
      ],
    ],
  ];

}
