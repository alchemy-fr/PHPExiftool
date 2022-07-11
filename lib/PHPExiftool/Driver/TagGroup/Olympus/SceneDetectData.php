<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Olympus;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SceneDetectData extends AbstractTagGroup
{

  protected string $id = 'Olympus:SceneDetectData';

  protected string $name = 'SceneDetectData';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Scene Detect Data',
  ];

  protected int $count = 720;

  protected int $flags = 38;

  protected array $tags = [
    0 => [
      /**
       * table_name : Olympus::FocusInfo
       * line : 255084
       * type : int32u
       * writable : true
       * count : 720
       * flags : Binary,Permanent,Unknown
       */
      'id' => 'Olympus::FocusInfo.Olympus:SceneDetectData',
      'desc' => [
        'en' => 'Scene Detect Data',
      ],
    ],
    1 => [
      /**
       * table_name : Olympus::Main
       * line : 259407
       * type : int32u
       * writable : true
       * count : 720
       * flags : Binary,Permanent,Unknown
       */
      'id' => 'Olympus::Main.Olympus:SceneDetectData',
      'desc' => [
        'en' => 'Scene Detect Data',
      ],
    ],
  ];

}
