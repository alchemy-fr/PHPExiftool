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
class StackedImage extends AbstractTagGroup
{

  protected string $id = 'Olympus:StackedImage';

  protected string $name = 'StackedImage';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Stacked Image',
  ];

  protected int $count = 2;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Olympus::CameraSettings
       * line : 253259
       * type : int32u
       * writable : true
       * count : 2
       * flags : Permanent
       */
      'id' => 'Olympus::CameraSettings.Olympus:StackedImage',
      'desc' => [
        'en' => 'Stacked Image',
      ],
    ],
  ];

}
