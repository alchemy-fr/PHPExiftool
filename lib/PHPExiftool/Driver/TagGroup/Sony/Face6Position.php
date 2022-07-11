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
class Face6Position extends AbstractTagGroup
{

  protected string $id = 'Sony:Face6Position';

  protected string $name = 'Face6Position';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Face 6 Position',
  ];

  protected int $count = 4;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::FaceInfo
       * line : 353006
       * type : int16u
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Sony::FaceInfo.Sony:Face6Position',
      'desc' => [
        'en' => 'Face 6 Position',
      ],
    ],
    1 => [
      /**
       * table_name : Sony::FaceInfo1
       * line : 353058
       * type : int16u
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Sony::FaceInfo1.Sony:Face6Position',
      'desc' => [
        'en' => 'Face 6 Position',
      ],
    ],
    2 => [
      /**
       * table_name : Sony::FaceInfo2
       * line : 353110
       * type : int16u
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Sony::FaceInfo2.Sony:Face6Position',
      'desc' => [
        'en' => 'Face 6 Position',
      ],
    ],
  ];

}
