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
class AFPointAtShutterRelease extends AbstractTagGroup
{

  protected string $id = 'Sony:AFPointAtShutterRelease';

  protected string $name = 'AFPointAtShutterRelease';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'AF Point At Shutter Release',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::AFInfo
       * line : 341705
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::AFInfo.Sony:AFPointAtShutterRelease',
      'desc' => [
        'en' => 'AF Point At Shutter Release',
      ],
    ],
    1 => [
      /**
       * table_name : Sony::AFInfo
       * line : 341787
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::AFInfo.Sony:AFPointAtShutterRelease',
      'desc' => [
        'en' => 'AF Point At Shutter Release',
      ],
    ],
    2 => [
      /**
       * table_name : Sony::AFInfo
       * line : 342800
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::AFInfo.Sony:AFPointAtShutterRelease',
      'desc' => [
        'en' => 'AF Point At Shutter Release',
      ],
    ],
  ];

}
