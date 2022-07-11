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
class AEExposureTime extends AbstractTagGroup
{

  protected string $id = 'Pentax:AEExposureTime';

  protected string $name = 'AEExposureTime';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'AE Exposure Time',
    'fr' => 'Temps d\'exposition AE',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Pentax::AEInfo
       * line : 283007
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Pentax::AEInfo.Pentax:AEExposureTime',
      'desc' => [
        'en' => 'AE Exposure Time',
        'fr' => 'Temps d\'exposition AE',
      ],
    ],
    1 => [
      /**
       * table_name : Pentax::AEInfo2
       * line : 283365
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Pentax::AEInfo2.Pentax:AEExposureTime',
      'desc' => [
        'en' => 'AE Exposure Time',
        'fr' => 'Temps d\'exposition AE',
      ],
    ],
    2 => [
      /**
       * table_name : Pentax::AEInfo3
       * line : 283610
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Pentax::AEInfo3.Pentax:AEExposureTime',
      'desc' => [
        'en' => 'AE Exposure Time',
        'fr' => 'Temps d\'exposition AE',
      ],
    ],
  ];

}
