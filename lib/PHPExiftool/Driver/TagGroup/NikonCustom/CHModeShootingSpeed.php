<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\NikonCustom;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CHModeShootingSpeed extends AbstractTagGroup
{

  protected string $id = 'NikonCustom:CHModeShootingSpeed';

  protected string $name = 'CHModeShootingSpeed';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'CH Mode Shooting Speed',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : NikonCustom::SettingsD3
       * line : 213051
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD3.NikonCustom:CHModeShootingSpeed',
      'desc' => [
        'en' => 'CH Mode Shooting Speed',
      ],
    ],
    1 => [
      /**
       * table_name : NikonCustom::SettingsD4
       * line : 215466
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD4.NikonCustom:CHModeShootingSpeed',
      'desc' => [
        'en' => 'CH Mode Shooting Speed',
      ],
    ],
    2 => [
      /**
       * table_name : NikonCustom::SettingsZ9
       * line : 238765
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsZ9.NikonCustom:CHModeShootingSpeed',
      'desc' => [
        'en' => 'CH Mode Shooting Speed',
      ],
    ],
  ];

}
