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
class GroupAreaAFIllumination extends AbstractTagGroup
{

  protected string $id = 'NikonCustom:GroupAreaAFIllumination';

  protected string $name = 'GroupAreaAFIllumination';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Group Area AF Illumination',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : NikonCustom::SettingsD4
       * line : 216535
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD4.NikonCustom:GroupAreaAFIllumination',
      'desc' => [
        'en' => 'Group Area AF Illumination',
      ],
    ],
    1 => [
      /**
       * table_name : NikonCustom::SettingsD500
       * line : 221543
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD500.NikonCustom:GroupAreaAFIllumination',
      'desc' => [
        'en' => 'Group Area AF Illumination',
      ],
    ],
    2 => [
      /**
       * table_name : NikonCustom::SettingsD810
       * line : 231680
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD810.NikonCustom:GroupAreaAFIllumination',
      'desc' => [
        'en' => 'Group Area AF Illumination',
      ],
    ],
  ];

}
