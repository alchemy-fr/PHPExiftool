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
class ColorCreatorEffect extends AbstractTagGroup
{

  protected string $id = 'Olympus:ColorCreatorEffect';

  protected string $name = 'ColorCreatorEffect';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Color Creator Effect',
  ];

  protected int $count = 6;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Olympus::CameraSettings
       * line : 253078
       * type : int16s
       * writable : true
       * count : 6
       * flags : Permanent
       */
      'id' => 'Olympus::CameraSettings.Olympus:ColorCreatorEffect',
      'desc' => [
        'en' => 'Color Creator Effect',
      ],
    ],
  ];

}
