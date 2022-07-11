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
class GPSMeasureMode extends AbstractTagGroup
{

  protected string $id = 'GPS:GPSMeasureMode';

  protected string $name = 'GPSMeasureMode';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'GPS Measure Mode',
    'fr' => 'Mode de mesure GPS',
  ];

  protected int $count = 2;

  protected array $tags = [
    0 => [
      /**
       * table_name : GPS::Main
       * line : 132363
       * type : string
       * writable : true
       * count : 2
       * flags : 
       */
      'id' => 'GPS::Main.GPS:GPSMeasureMode',
      'desc' => [
        'en' => 'GPS Measure Mode',
        'fr' => 'Mode de mesure GPS',
      ],
    ],
    1 => [
      /**
       * table_name : H264::MDPM
       * line : 141953
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'H264::MDPM.GPS:GPSMeasureMode',
      'desc' => [
        'en' => 'GPS Measure Mode',
        'fr' => 'Mode de mesure GPS',
      ],
    ],
    2 => [
      /**
       * table_name : Pentax::PENT
       * line : 301748
       * type : string
       * writable : false
       * count : 2
       * flags : Permanent
       */
      'id' => 'Pentax::PENT.GPS:GPSMeasureMode',
      'desc' => [
        'en' => 'GPS Measure Mode',
        'fr' => 'Mode de mesure GPS',
      ],
    ],
  ];

}
