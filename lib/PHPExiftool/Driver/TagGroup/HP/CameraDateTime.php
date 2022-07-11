<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\HP;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CameraDateTime extends AbstractTagGroup
{

  protected string $id = 'HP:CameraDateTime';

  protected string $name = 'CameraDateTime';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Camera Date Time',
  ];

  protected int $count = 20;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : HP::Type4
       * line : 142546
       * type : string
       * writable : false
       * count : 20
       * flags : Permanent
       */
      'id' => 'HP::Type4.HP:CameraDateTime',
      'desc' => [
        'en' => 'Camera Date Time',
      ],
    ],
    1 => [
      /**
       * table_name : HP::Type6
       * line : 142625
       * type : string
       * writable : false
       * count : 20
       * flags : Permanent
       */
      'id' => 'HP::Type6.HP:CameraDateTime',
      'desc' => [
        'en' => 'Camera Date Time',
      ],
    ],
  ];

}
