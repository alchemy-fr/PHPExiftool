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
class AFStatusBottom extends AbstractTagGroup
{

  protected string $id = 'Sony:AFStatusBottom';

  protected string $name = 'AFStatusBottom';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'AF Status Bottom',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::CameraInfo
       * line : 345679
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::CameraInfo.Sony:AFStatusBottom',
      'desc' => [
        'en' => 'AF Status Bottom',
      ],
    ],
    1 => [
      /**
       * table_name : Sony::CameraInfo2
       * line : 346153
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::CameraInfo2.Sony:AFStatusBottom',
      'desc' => [
        'en' => 'AF Status Bottom',
      ],
    ],
    2 => [
      /**
       * table_name : Sony::CameraInfo3
       * line : 346866
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::CameraInfo3.Sony:AFStatusBottom',
      'desc' => [
        'en' => 'AF Status Bottom',
      ],
    ],
  ];

}
