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
class ExposureTime extends AbstractTagGroup
{

  protected string $id = 'Pentax:ExposureTime';

  protected string $name = 'ExposureTime';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Exposure Time',
    'fr' => 'Temps de pose',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Pentax::MOV
       * line : 294874
       * type : int32u
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Pentax::MOV.Pentax:ExposureTime',
      'desc' => [
        'en' => 'Exposure Time',
        'fr' => 'Temps de pose',
      ],
    ],
    1 => [
      /**
       * table_name : Pentax::Main
       * line : 297409
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Pentax::Main.Pentax:ExposureTime',
      'desc' => [
        'en' => 'Exposure Time',
        'fr' => 'Temps de pose',
      ],
    ],
    2 => [
      /**
       * table_name : Pentax::PENT
       * line : 301323
       * type : int32u
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Pentax::PENT.Pentax:ExposureTime',
      'desc' => [
        'en' => 'Exposure Time',
        'fr' => 'Temps de pose',
      ],
    ],
  ];

}
