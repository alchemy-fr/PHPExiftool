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
class AFPointSelection extends AbstractTagGroup
{

  protected string $id = 'NikonCustom:AFPointSelection';

  protected string $name = 'AFPointSelection';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'AF Point Selection',
    'fr' => 'Méthode sélect. collimateurs AF',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : NikonCustom::SettingsD3
       * line : 212181
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD3.NikonCustom:AFPointSelection',
      'desc' => [
        'en' => 'AF Point Selection',
        'fr' => 'Méthode sélect. collimateurs AF',
      ],
    ],
    1 => [
      /**
       * table_name : NikonCustom::SettingsD4
       * line : 214830
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD4.NikonCustom:AFPointSelection',
      'desc' => [
        'en' => 'AF Point Selection',
        'fr' => 'Méthode sélect. collimateurs AF',
      ],
    ],
    2 => [
      /**
       * table_name : NikonCustom::SettingsD700
       * line : 224790
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD700.NikonCustom:AFPointSelection',
      'desc' => [
        'en' => 'AF Point Selection',
        'fr' => 'Méthode sélect. collimateurs AF',
      ],
    ],
    3 => [
      /**
       * table_name : NikonCustom::SettingsD810
       * line : 229820
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD810.NikonCustom:AFPointSelection',
      'desc' => [
        'en' => 'AF Point Selection',
        'fr' => 'Méthode sélect. collimateurs AF',
      ],
    ],
    4 => [
      /**
       * table_name : NikonCustom::SettingsD850
       * line : 231948
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD850.NikonCustom:AFPointSelection',
      'desc' => [
        'en' => 'AF Point Selection',
        'fr' => 'Méthode sélect. collimateurs AF',
      ],
    ],
  ];

}
