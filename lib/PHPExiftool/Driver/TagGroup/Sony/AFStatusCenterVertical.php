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
class AFStatusCenterVertical extends AbstractTagGroup
{

  protected string $id = 'Sony:AFStatusCenterVertical';

  protected string $name = 'AFStatusCenterVertical';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'AF Status Center Vertical',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::AFStatus15
       * line : 343832
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::AFStatus15.Sony:AFStatusCenterVertical',
      'desc' => [
        'en' => 'AF Status Center Vertical',
      ],
    ],
    1 => [
      /**
       * table_name : Sony::AFStatus19
       * line : 344120
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::AFStatus19.Sony:AFStatusCenterVertical',
      'desc' => [
        'en' => 'AF Status Center Vertical',
      ],
    ],
    2 => [
      /**
       * table_name : Sony::CameraInfo2
       * line : 346181
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::CameraInfo2.Sony:AFStatusCenterVertical',
      'desc' => [
        'en' => 'AF Status Center Vertical',
      ],
    ],
    3 => [
      /**
       * table_name : Sony::CameraInfo3
       * line : 346894
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::CameraInfo3.Sony:AFStatusCenterVertical',
      'desc' => [
        'en' => 'AF Status Center Vertical',
      ],
    ],
  ];

}
