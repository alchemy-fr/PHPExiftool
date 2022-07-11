<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\HP;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SerialNumber extends AbstractTagGroup
{

  protected string $id = 'HP:SerialNumber';

  protected string $name = 'SerialNumber';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Serial Number',
    'fr' => 'Numéro de série',
  ];

  protected int $count = 26;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : HP::TDHD
       * line : 142437
       * type : ?
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'HP::TDHD.HP:SerialNumber',
      'desc' => [
        'en' => 'Serial Number',
        'fr' => 'Numéro de série',
      ],
    ],
    1 => [
      /**
       * table_name : HP::Type2
       * line : 142487
       * type : ?
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'HP::Type2.HP:SerialNumber',
      'desc' => [
        'en' => 'Serial Number',
        'fr' => 'Numéro de série',
      ],
    ],
    2 => [
      /**
       * table_name : HP::Type4
       * line : 142566
       * type : string
       * writable : false
       * count : 26
       * flags : Permanent
       */
      'id' => 'HP::Type4.HP:SerialNumber',
      'desc' => [
        'en' => 'Serial Number',
        'fr' => 'Numéro de série',
      ],
    ],
    3 => [
      /**
       * table_name : HP::Type6
       * line : 142645
       * type : string
       * writable : false
       * count : 26
       * flags : Permanent
       */
      'id' => 'HP::Type6.HP:SerialNumber',
      'desc' => [
        'en' => 'Serial Number',
        'fr' => 'Numéro de série',
      ],
    ],
  ];

}
