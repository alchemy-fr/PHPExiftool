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
class SettingStateOrProvinceOrCountyName extends AbstractTagGroup
{

  protected string $id = 'MXF:SettingStateOrProvinceOrCountyName';

  protected string $name = 'SettingStateOrProvinceOrCountyName';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Setting State Or Province Or County Name',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 168807
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:SettingStateOrProvinceOrCountyName',
      'desc' => [
        'en' => 'Setting State Or Province Or County Name',
      ],
    ],
    1 => [
      /**
       * table_name : MXF::Main
       * line : 170868
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:SettingStateOrProvinceOrCountyName',
      'desc' => [
        'en' => 'Setting State Or Province Or County Name',
      ],
    ],
  ];

}
