<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FlashRemoteControl extends AbstractTagGroup
{

  protected string $id = 'Nikon:FlashRemoteControl';

  protected string $name = 'FlashRemoteControl';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Flash Remote Control',
  ];

  protected int $count = 0;

  protected int $flags = 36;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::MenuSettingsZ7II
       * line : 200354
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Nikon::MenuSettingsZ7II.Nikon:FlashRemoteControl',
      'desc' => [
        'en' => 'Flash Remote Control',
      ],
    ],
    1 => [
      /**
       * table_name : Nikon::MenuSettingsZ9
       * line : 201394
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Nikon::MenuSettingsZ9.Nikon:FlashRemoteControl',
      'desc' => [
        'en' => 'Flash Remote Control',
      ],
    ],
    2 => [
      /**
       * table_name : Nikon::ShotInfoD6
       * line : 208521
       * type : ?
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Nikon::ShotInfoD6.Nikon:FlashRemoteControl',
      'desc' => [
        'en' => 'Flash Remote Control',
      ],
    ],
  ];

}
