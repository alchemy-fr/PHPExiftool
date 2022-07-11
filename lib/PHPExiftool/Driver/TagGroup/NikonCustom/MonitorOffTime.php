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
class MonitorOffTime extends AbstractTagGroup
{

  protected string $id = 'NikonCustom:MonitorOffTime';

  protected string $name = 'MonitorOffTime';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Monitor Off Time',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : NikonCustom::SettingsD3
       * line : 214184
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD3.NikonCustom:MonitorOffTime',
      'desc' => [
        'en' => 'Monitor Off Time',
      ],
    ],
    1 => [
      /**
       * table_name : NikonCustom::SettingsD40
       * line : 217175
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD40.NikonCustom:MonitorOffTime',
      'desc' => [
        'en' => 'Monitor Off Time',
      ],
    ],
    2 => [
      /**
       * table_name : NikonCustom::SettingsD80
       * line : 228451
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD80.NikonCustom:MonitorOffTime',
      'desc' => [
        'en' => 'Monitor Off Time',
      ],
    ],
  ];

}
