<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MXF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SettingCountryName extends AbstractTagGroup
{

  protected string $id = 'MXF:SettingCountryName';

  protected string $name = 'SettingCountryName';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Setting Country Name',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 168813
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:SettingCountryName',
      'desc' => [
        'en' => 'Setting Country Name',
      ],
    ],
    1 => [
      /**
       * table_name : MXF::Main
       * line : 170874
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:SettingCountryName',
      'desc' => [
        'en' => 'Setting Country Name',
      ],
    ],
  ];

}
