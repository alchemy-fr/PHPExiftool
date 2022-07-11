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
class AEMinExposureTime extends AbstractTagGroup
{

  protected string $id = 'Pentax:AEMinExposureTime';

  protected string $name = 'AEMinExposureTime';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'AE Min Exposure Time',
    'fr' => 'Temps d\'exposition mini AE',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Pentax::AEInfo
       * line : 283047
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Pentax::AEInfo.Pentax:AEMinExposureTime',
      'desc' => [
        'en' => 'AE Min Exposure Time',
        'fr' => 'Temps d\'exposition mini AE',
      ],
    ],
    1 => [
      /**
       * table_name : Pentax::AEInfo2
       * line : 283600
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Pentax::AEInfo2.Pentax:AEMinExposureTime',
      'desc' => [
        'en' => 'AE Min Exposure Time',
        'fr' => 'Temps d\'exposition mini AE',
      ],
    ],
    2 => [
      /**
       * table_name : Pentax::AEInfo3
       * line : 283656
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Pentax::AEInfo3.Pentax:AEMinExposureTime',
      'desc' => [
        'en' => 'AE Min Exposure Time',
        'fr' => 'Temps d\'exposition mini AE',
      ],
    ],
  ];

}
