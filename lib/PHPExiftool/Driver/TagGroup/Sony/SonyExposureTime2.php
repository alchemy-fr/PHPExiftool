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
class SonyExposureTime2 extends AbstractTagGroup
{

  protected string $id = 'Sony:SonyExposureTime2';

  protected string $name = 'SonyExposureTime2';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Sony Exposure Time 2',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::Tag9405b
       * line : 387930
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag9405b.Sony:SonyExposureTime2',
      'desc' => [
        'en' => 'Sony Exposure Time 2',
      ],
    ],
    1 => [
      /**
       * table_name : Sony::Tag9416
       * line : 391383
       * type : int16u
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag9416.Sony:SonyExposureTime2',
      'desc' => [
        'en' => 'Sony Exposure Time 2',
      ],
    ],
  ];

}
