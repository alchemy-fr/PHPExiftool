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
class ViewfinderWarning extends AbstractTagGroup
{

  protected string $id = 'NikonCustom:ViewfinderWarning';

  protected string $name = 'ViewfinderWarning';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Viewfinder Warning',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : NikonCustom::SettingsD3
       * line : 213338
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD3.NikonCustom:ViewfinderWarning',
      'desc' => [
        'en' => 'Viewfinder Warning',
      ],
    ],
    1 => [
      /**
       * table_name : NikonCustom::SettingsD7000
       * line : 226911
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD7000.NikonCustom:ViewfinderWarning',
      'desc' => [
        'en' => 'Viewfinder Warning',
      ],
    ],
    2 => [
      /**
       * table_name : NikonCustom::SettingsD80
       * line : 228788
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD80.NikonCustom:ViewfinderWarning',
      'desc' => [
        'en' => 'Viewfinder Warning',
      ],
    ],
    3 => [
      /**
       * table_name : NikonCustom::SettingsD90
       * line : 234526
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD90.NikonCustom:ViewfinderWarning',
      'desc' => [
        'en' => 'Viewfinder Warning',
      ],
    ],
  ];

}
