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
class ExposureCompensation extends AbstractTagGroup
{

  protected string $id = 'Pentax:ExposureCompensation';

  protected string $name = 'ExposureCompensation';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Exposure Compensation',
    'fr' => 'Décalage d\'exposition',
  ];

  protected int $count = 2;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Pentax::MOV
       * line : 294910
       * type : rational64s
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Pentax::MOV.Pentax:ExposureCompensation',
      'desc' => [
        'en' => 'Exposure Compensation',
        'fr' => 'Décalage d\'exposition',
      ],
    ],
    1 => [
      /**
       * table_name : Pentax::Main
       * line : 297713
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Pentax::Main.Pentax:ExposureCompensation',
      'desc' => [
        'en' => 'Exposure Compensation',
        'fr' => 'Décalage d\'exposition',
      ],
    ],
    2 => [
      /**
       * table_name : Pentax::Main
       * line : 297731
       * type : int16u
       * writable : true
       * count : 2
       * flags : Permanent
       */
      'id' => 'Pentax::Main.Pentax:ExposureCompensation',
      'desc' => [
        'en' => 'Exposure Compensation',
        'fr' => 'Décalage d\'exposition',
      ],
    ],
    3 => [
      /**
       * table_name : Pentax::PENT
       * line : 301359
       * type : rational64s
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Pentax::PENT.Pentax:ExposureCompensation',
      'desc' => [
        'en' => 'Exposure Compensation',
        'fr' => 'Décalage d\'exposition',
      ],
    ],
  ];

}
