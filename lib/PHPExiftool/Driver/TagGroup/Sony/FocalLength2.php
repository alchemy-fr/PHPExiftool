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
class FocalLength2 extends AbstractTagGroup
{

  protected string $id = 'Sony:FocalLength2';

  protected string $name = 'FocalLength2';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Focal Length 2',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::MoreSettings
       * line : 361230
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::MoreSettings.Sony:FocalLength2',
      'desc' => [
        'en' => 'Focal Length 2',
      ],
    ],
    1 => [
      /**
       * table_name : Sony::MoreSettings
       * line : 361255
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::MoreSettings.Sony:FocalLength2',
      'desc' => [
        'en' => 'Focal Length 2',
      ],
    ],
    2 => [
      /**
       * table_name : Sony::MoreSettings
       * line : 361341
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::MoreSettings.Sony:FocalLength2',
      'desc' => [
        'en' => 'Focal Length 2',
      ],
    ],
  ];

}
