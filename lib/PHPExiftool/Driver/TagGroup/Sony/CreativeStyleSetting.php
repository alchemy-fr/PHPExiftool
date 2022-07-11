<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Sony;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CreativeStyleSetting extends AbstractTagGroup
{

  protected string $id = 'Sony:CreativeStyleSetting';

  protected string $name = 'CreativeStyleSetting';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Creative Style Setting',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::CameraSettings3
       * line : 350674
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::CameraSettings3.Sony:CreativeStyleSetting',
      'desc' => [
        'en' => 'Creative Style Setting',
      ],
    ],
    1 => [
      /**
       * table_name : Sony::MoreSettings
       * line : 360543
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::MoreSettings.Sony:CreativeStyleSetting',
      'desc' => [
        'en' => 'Creative Style Setting',
      ],
    ],
  ];

}
