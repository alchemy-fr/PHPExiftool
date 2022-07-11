<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Sony;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AFPointsUsed extends AbstractTagGroup
{

  protected string $id = 'Sony:AFPointsUsed';

  protected string $name = 'AFPointsUsed';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'AF Points Used',
    'fr' => 'Points AF utilisés',
  ];

  protected int $count = 10;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::AFInfo
       * line : 341997
       * type : int8u
       * writable : true
       * count : 10
       * flags : Permanent
       */
      'id' => 'Sony::AFInfo.Sony:AFPointsUsed',
      'desc' => [
        'en' => 'AF Points Used',
        'fr' => 'Points AF utilisés',
      ],
    ],
    1 => [
      /**
       * table_name : Sony::AFInfo
       * line : 343374
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::AFInfo.Sony:AFPointsUsed',
      'desc' => [
        'en' => 'AF Points Used',
        'fr' => 'Points AF utilisés',
      ],
    ],
    2 => [
      /**
       * table_name : Sony::Main
       * line : 355701
       * type : ?
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Main.Sony:AFPointsUsed',
      'desc' => [
        'en' => 'AF Points Used',
        'fr' => 'Points AF utilisés',
      ],
    ],
    3 => [
      /**
       * table_name : Sony::Main
       * line : 355805
       * type : ?
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Main.Sony:AFPointsUsed',
      'desc' => [
        'en' => 'AF Points Used',
        'fr' => 'Points AF utilisés',
      ],
    ],
  ];

}
