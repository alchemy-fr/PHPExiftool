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
class CameraType2 extends AbstractTagGroup
{

  protected string $id = 'Olympus:CameraType2';

  protected string $name = 'CameraType2';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Camera Type 2',
  ];

  protected int $count = 6;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Olympus::Equipment
       * line : 253428
       * type : string
       * writable : true
       * count : 6
       * flags : Permanent
       */
      'id' => 'Olympus::Equipment.Olympus:CameraType2',
      'desc' => [
        'en' => 'Camera Type 2',
      ],
    ],
  ];

}
