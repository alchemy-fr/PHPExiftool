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
class FocusDistance extends AbstractTagGroup
{

  protected string $id = 'Leica:FocusDistance';

  protected string $name = 'FocusDistance';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Focus Distance',
    'fr' => 'Distance de mise au point',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Panasonic::FocusInfo
       * line : 274591
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Panasonic::FocusInfo.Leica:FocusDistance',
      'desc' => [
        'en' => 'Focus Distance',
        'fr' => 'Distance de mise au point',
      ],
    ],
    1 => [
      /**
       * table_name : Panasonic::Leica6
       * line : 275282
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Panasonic::Leica6.Leica:FocusDistance',
      'desc' => [
        'en' => 'Focus Distance',
        'fr' => 'Distance de mise au point',
      ],
    ],
    2 => [
      /**
       * table_name : Panasonic::Leica9
       * line : 275325
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Panasonic::Leica9.Leica:FocusDistance',
      'desc' => [
        'en' => 'Focus Distance',
        'fr' => 'Distance de mise au point',
      ],
    ],
  ];

}
