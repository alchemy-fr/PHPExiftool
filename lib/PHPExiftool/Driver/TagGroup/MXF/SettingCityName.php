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
class SettingCityName extends AbstractTagGroup
{

  protected string $id = 'MXF:SettingCityName';

  protected string $name = 'SettingCityName';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Setting City Name',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 168804
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:SettingCityName',
      'desc' => [
        'en' => 'Setting City Name',
      ],
    ],
    1 => [
      /**
       * table_name : MXF::Main
       * line : 170865
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:SettingCityName',
      'desc' => [
        'en' => 'Setting City Name',
      ],
    ],
  ];

}
