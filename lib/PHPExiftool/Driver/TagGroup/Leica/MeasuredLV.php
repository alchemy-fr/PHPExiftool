<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Leica;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MeasuredLV extends AbstractTagGroup
{

  protected string $id = 'Leica:MeasuredLV';

  protected string $name = 'MeasuredLV';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Measured LV',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Panasonic::Leica2
       * line : 275012
       * type : rational64s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Panasonic::Leica2.Leica:MeasuredLV',
      'desc' => [
        'en' => 'Measured LV',
      ],
    ],
    1 => [
      /**
       * table_name : Panasonic::Leica6
       * line : 275296
       * type : rational64s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Panasonic::Leica6.Leica:MeasuredLV',
      'desc' => [
        'en' => 'Measured LV',
      ],
    ],
    2 => [
      /**
       * table_name : Panasonic::Leica9
       * line : 275339
       * type : rational64s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Panasonic::Leica9.Leica:MeasuredLV',
      'desc' => [
        'en' => 'Measured LV',
      ],
    ],
    3 => [
      /**
       * table_name : Panasonic::Subdir
       * line : 279986
       * type : int32s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Panasonic::Subdir.Leica:MeasuredLV',
      'desc' => [
        'en' => 'Measured LV',
      ],
    ],
  ];

}
