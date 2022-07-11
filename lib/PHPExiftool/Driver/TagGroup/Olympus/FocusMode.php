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
class FocusMode extends AbstractTagGroup
{

  protected string $id = 'Olympus:FocusMode';

  protected string $name = 'FocusMode';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Focus Mode',
    'fr' => 'Mode mise au point',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Olympus::CameraSettings
       * line : 251012
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Olympus::CameraSettings.Olympus:FocusMode',
      'desc' => [
        'en' => 'Focus Mode',
        'fr' => 'Mode mise au point',
      ],
    ],
    1 => [
      /**
       * table_name : Olympus::Main
       * line : 258892
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Olympus::Main.Olympus:FocusMode',
      'desc' => [
        'en' => 'Focus Mode',
        'fr' => 'Mode mise au point',
      ],
    ],
  ];

}
