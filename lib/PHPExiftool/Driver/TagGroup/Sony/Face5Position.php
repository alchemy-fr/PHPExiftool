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
class Face5Position extends AbstractTagGroup
{

  protected string $id = 'Sony:Face5Position';

  protected string $name = 'Face5Position';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Face 5 Position',
  ];

  protected int $count = 4;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::FaceInfo
       * line : 353000
       * type : int16u
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Sony::FaceInfo.Sony:Face5Position',
      'desc' => [
        'en' => 'Face 5 Position',
      ],
    ],
    1 => [
      /**
       * table_name : Sony::FaceInfo1
       * line : 353052
       * type : int16u
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Sony::FaceInfo1.Sony:Face5Position',
      'desc' => [
        'en' => 'Face 5 Position',
      ],
    ],
    2 => [
      /**
       * table_name : Sony::FaceInfo2
       * line : 353104
       * type : int16u
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Sony::FaceInfo2.Sony:Face5Position',
      'desc' => [
        'en' => 'Face 5 Position',
      ],
    ],
  ];

}
