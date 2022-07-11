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
class AFStatusRight extends AbstractTagGroup
{

  protected string $id = 'Sony:AFStatusRight';

  protected string $name = 'AFStatusRight';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'AF Status Right',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::AFStatus15
       * line : 343879
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::AFStatus15.Sony:AFStatusRight',
      'desc' => [
        'en' => 'AF Status Right',
      ],
    ],
    1 => [
      /**
       * table_name : Sony::CameraInfo
       * line : 345850
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::CameraInfo.Sony:AFStatusRight',
      'desc' => [
        'en' => 'AF Status Right',
      ],
    ],
    2 => [
      /**
       * table_name : Sony::CameraInfo2
       * line : 346265
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::CameraInfo2.Sony:AFStatusRight',
      'desc' => [
        'en' => 'AF Status Right',
      ],
    ],
    3 => [
      /**
       * table_name : Sony::CameraInfo3
       * line : 346978
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::CameraInfo3.Sony:AFStatusRight',
      'desc' => [
        'en' => 'AF Status Right',
      ],
    ],
  ];

}
