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
class VibrationReduction extends AbstractTagGroup
{

  protected string $id = 'Nikon:VibrationReduction';

  protected string $name = 'VibrationReduction';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Vibration Reduction',
    'fr' => 'Reduction des vibrations',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::ShotInfo
       * line : 205718
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfo.Nikon:VibrationReduction',
      'desc' => [
        'en' => 'Vibration Reduction',
        'fr' => 'Reduction des vibrations',
      ],
    ],
    1 => [
      /**
       * table_name : Nikon::ShotInfo
       * line : 205754
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfo.Nikon:VibrationReduction',
      'desc' => [
        'en' => 'Vibration Reduction',
        'fr' => 'Reduction des vibrations',
      ],
    ],
    2 => [
      /**
       * table_name : Nikon::ShotInfo
       * line : 205795
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfo.Nikon:VibrationReduction',
      'desc' => [
        'en' => 'Vibration Reduction',
        'fr' => 'Reduction des vibrations',
      ],
    ],
    3 => [
      /**
       * table_name : Nikon::ShotInfoD40
       * line : 206692
       * type : ?
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfoD40.Nikon:VibrationReduction',
      'desc' => [
        'en' => 'Vibration Reduction',
        'fr' => 'Reduction des vibrations',
      ],
    ],
    4 => [
      /**
       * table_name : Nikon::ShotInfoD80
       * line : 208765
       * type : ?
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfoD80.Nikon:VibrationReduction',
      'desc' => [
        'en' => 'Vibration Reduction',
        'fr' => 'Reduction des vibrations',
      ],
    ],
    5 => [
      /**
       * table_name : Nikon::VRInfo
       * line : 209915
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::VRInfo.Nikon:VibrationReduction',
      'desc' => [
        'en' => 'Vibration Reduction',
        'fr' => 'Reduction des vibrations',
      ],
    ],
  ];

}
