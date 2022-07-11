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
class FlashCompensation extends AbstractTagGroup
{

  protected string $id = 'Nikon:FlashCompensation';

  protected string $name = 'FlashCompensation';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Flash Compensation',
    'fr' => 'Compensation flash',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::FlashInfo0100
       * line : 192892
       * type : int8s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::FlashInfo0100.Nikon:FlashCompensation',
      'desc' => [
        'en' => 'Flash Compensation',
        'fr' => 'Compensation flash',
      ],
    ],
    1 => [
      /**
       * table_name : Nikon::FlashInfo0102
       * line : 193396
       * type : int8s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::FlashInfo0102.Nikon:FlashCompensation',
      'desc' => [
        'en' => 'Flash Compensation',
        'fr' => 'Compensation flash',
      ],
    ],
    2 => [
      /**
       * table_name : Nikon::FlashInfo0103
       * line : 193968
       * type : int8s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::FlashInfo0103.Nikon:FlashCompensation',
      'desc' => [
        'en' => 'Flash Compensation',
        'fr' => 'Compensation flash',
      ],
    ],
    3 => [
      /**
       * table_name : Nikon::FlashInfo0106
       * line : 194951
       * type : int8s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::FlashInfo0106.Nikon:FlashCompensation',
      'desc' => [
        'en' => 'Flash Compensation',
        'fr' => 'Compensation flash',
      ],
    ],
    4 => [
      /**
       * table_name : Nikon::FlashInfo0107
       * line : 195119
       * type : int8s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::FlashInfo0107.Nikon:FlashCompensation',
      'desc' => [
        'en' => 'Flash Compensation',
        'fr' => 'Compensation flash',
      ],
    ],
    5 => [
      /**
       * table_name : Nikon::FlashInfo0300
       * line : 195570
       * type : int8s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::FlashInfo0300.Nikon:FlashCompensation',
      'desc' => [
        'en' => 'Flash Compensation',
        'fr' => 'Compensation flash',
      ],
    ],
  ];

}
