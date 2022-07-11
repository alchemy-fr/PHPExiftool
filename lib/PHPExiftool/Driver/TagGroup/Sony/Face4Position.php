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
class Face4Position extends AbstractTagGroup
{

  protected string $id = 'Sony:Face4Position';

  protected string $name = 'Face4Position';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Face 4 Position',
  ];

  protected int $count = 4;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::FaceInfo
       * line : 352994
       * type : int16u
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Sony::FaceInfo.Sony:Face4Position',
      'desc' => [
        'en' => 'Face 4 Position',
      ],
    ],
    1 => [
      /**
       * table_name : Sony::FaceInfo1
       * line : 353046
       * type : int16u
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Sony::FaceInfo1.Sony:Face4Position',
      'desc' => [
        'en' => 'Face 4 Position',
      ],
    ],
    2 => [
      /**
       * table_name : Sony::FaceInfo2
       * line : 353098
       * type : int16u
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Sony::FaceInfo2.Sony:Face4Position',
      'desc' => [
        'en' => 'Face 4 Position',
      ],
    ],
    3 => [
      /**
       * table_name : Sony::FaceInfoA
       * line : 353189
       * type : int16u
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Sony::FaceInfoA.Sony:Face4Position',
      'desc' => [
        'en' => 'Face 4 Position',
      ],
    ],
  ];

}
