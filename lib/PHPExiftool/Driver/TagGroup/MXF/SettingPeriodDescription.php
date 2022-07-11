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
class SettingPeriodDescription extends AbstractTagGroup
{

  protected string $id = 'MXF:SettingPeriodDescription';

  protected string $name = 'SettingPeriodDescription';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Setting Period Description',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 171979
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:SettingPeriodDescription',
      'desc' => [
        'en' => 'Setting Period Description',
      ],
    ],
    1 => [
      /**
       * table_name : MXF::Main
       * line : 171982
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:SettingPeriodDescription',
      'desc' => [
        'en' => 'Setting Period Description',
      ],
    ],
  ];

}
