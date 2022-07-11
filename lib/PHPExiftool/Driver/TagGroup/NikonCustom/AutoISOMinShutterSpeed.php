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
class AutoISOMinShutterSpeed extends AbstractTagGroup
{

  protected string $id = 'NikonCustom:AutoISOMinShutterSpeed';

  protected string $name = 'AutoISOMinShutterSpeed';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Auto ISO Min Shutter Speed',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : NikonCustom::SettingsD40
       * line : 217117
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD40.NikonCustom:AutoISOMinShutterSpeed',
      'desc' => [
        'en' => 'Auto ISO Min Shutter Speed',
      ],
    ],
    1 => [
      /**
       * table_name : NikonCustom::SettingsD80
       * line : 228355
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD80.NikonCustom:AutoISOMinShutterSpeed',
      'desc' => [
        'en' => 'Auto ISO Min Shutter Speed',
      ],
    ],
  ];

}
