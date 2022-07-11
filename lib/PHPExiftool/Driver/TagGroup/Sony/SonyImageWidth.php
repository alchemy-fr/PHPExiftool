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
class SonyImageWidth extends AbstractTagGroup
{

  protected string $id = 'Sony:SonyImageWidth';

  protected string $name = 'SonyImageWidth';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Sony Image Width',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::PMP
       * line : 361643
       * type : int16u
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::PMP.Sony:SonyImageWidth',
      'desc' => [
        'en' => 'Sony Image Width',
      ],
    ],
    1 => [
      /**
       * table_name : Sony::ShotInfo
       * line : 362372
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::ShotInfo.Sony:SonyImageWidth',
      'desc' => [
        'en' => 'Sony Image Width',
      ],
    ],
  ];

}
