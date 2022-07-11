<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Canon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class HighlightTonePriority extends AbstractTagGroup
{

  protected string $id = 'Canon:HighlightTonePriority';

  protected string $name = 'HighlightTonePriority';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Highlight Tone Priority',
    'fr' => 'Priorité hautes lumières',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::CameraInfo1DmkIV
       * line : 17883
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo1DmkIV.Canon:HighlightTonePriority',
      'desc' => [
        'en' => 'Highlight Tone Priority',
        'fr' => 'Priorité hautes lumières',
      ],
    ],
    1 => [
      /**
       * table_name : Canon::CameraInfo500D
       * line : 23996
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo500D.Canon:HighlightTonePriority',
      'desc' => [
        'en' => 'Highlight Tone Priority',
        'fr' => 'Priorité hautes lumières',
      ],
    ],
    2 => [
      /**
       * table_name : Canon::CameraInfo50D
       * line : 26298
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo50D.Canon:HighlightTonePriority',
      'desc' => [
        'en' => 'Highlight Tone Priority',
        'fr' => 'Priorité hautes lumières',
      ],
    ],
    3 => [
      /**
       * table_name : Canon::CameraInfo550D
       * line : 28597
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo550D.Canon:HighlightTonePriority',
      'desc' => [
        'en' => 'Highlight Tone Priority',
        'fr' => 'Priorité hautes lumières',
      ],
    ],
    4 => [
      /**
       * table_name : Canon::CameraInfo5DmkII
       * line : 34999
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo5DmkII.Canon:HighlightTonePriority',
      'desc' => [
        'en' => 'Highlight Tone Priority',
        'fr' => 'Priorité hautes lumières',
      ],
    ],
    5 => [
      /**
       * table_name : Canon::CameraInfo600D
       * line : 39459
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo600D.Canon:HighlightTonePriority',
      'desc' => [
        'en' => 'Highlight Tone Priority',
        'fr' => 'Priorité hautes lumières',
      ],
    ],
    6 => [
      /**
       * table_name : Canon::CameraInfo7D
       * line : 51532
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo7D.Canon:HighlightTonePriority',
      'desc' => [
        'en' => 'Highlight Tone Priority',
        'fr' => 'Priorité hautes lumières',
      ],
    ],
    7 => [
      /**
       * table_name : Canon::LightingOpt
       * line : 64261
       * type : int32s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::LightingOpt.Canon:HighlightTonePriority',
      'desc' => [
        'en' => 'Highlight Tone Priority',
        'fr' => 'Priorité hautes lumières',
      ],
    ],
  ];

}
