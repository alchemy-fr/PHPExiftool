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
class MoviePreviewButton extends AbstractTagGroup
{

  protected string $id = 'NikonCustom:MoviePreviewButton';

  protected string $name = 'MoviePreviewButton';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Movie Preview Button',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : NikonCustom::SettingsD4
       * line : 216328
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD4.NikonCustom:MoviePreviewButton',
      'desc' => [
        'en' => 'Movie Preview Button',
      ],
    ],
    1 => [
      /**
       * table_name : NikonCustom::SettingsD5
       * line : 218940
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD5.NikonCustom:MoviePreviewButton',
      'desc' => [
        'en' => 'Movie Preview Button',
      ],
    ],
    2 => [
      /**
       * table_name : NikonCustom::SettingsD500
       * line : 221390
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD500.NikonCustom:MoviePreviewButton',
      'desc' => [
        'en' => 'Movie Preview Button',
      ],
    ],
    3 => [
      /**
       * table_name : NikonCustom::SettingsD810
       * line : 231512
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD810.NikonCustom:MoviePreviewButton',
      'desc' => [
        'en' => 'Movie Preview Button',
      ],
    ],
    4 => [
      /**
       * table_name : NikonCustom::SettingsD850
       * line : 233289
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD850.NikonCustom:MoviePreviewButton',
      'desc' => [
        'en' => 'Movie Preview Button',
      ],
    ],
  ];

}
