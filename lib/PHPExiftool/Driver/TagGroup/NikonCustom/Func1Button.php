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
class Func1Button extends AbstractTagGroup
{

  protected string $id = 'NikonCustom:Func1Button';

  protected string $name = 'Func1Button';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Func 1 Button',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : NikonCustom::SettingsD5
       * line : 218167
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD5.NikonCustom:Func1Button',
      'desc' => [
        'en' => 'Func 1 Button',
      ],
    ],
    1 => [
      /**
       * table_name : NikonCustom::SettingsD500
       * line : 220635
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD500.NikonCustom:Func1Button',
      'desc' => [
        'en' => 'Func 1 Button',
      ],
    ],
    2 => [
      /**
       * table_name : NikonCustom::SettingsD850
       * line : 232522
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD850.NikonCustom:Func1Button',
      'desc' => [
        'en' => 'Func 1 Button',
      ],
    ],
    3 => [
      /**
       * table_name : NikonCustom::SettingsZ9
       * line : 236355
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsZ9.NikonCustom:Func1Button',
      'desc' => [
        'en' => 'Func 1 Button',
      ],
    ],
  ];

}
