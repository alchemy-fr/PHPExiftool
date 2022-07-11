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
class ShotNumberSincePowerUp extends AbstractTagGroup
{

  protected string $id = 'Sony:ShotNumberSincePowerUp';

  protected string $name = 'ShotNumberSincePowerUp';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Shot Number Since Power Up',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::MoreInfo0401
       * line : 360137
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::MoreInfo0401.Sony:ShotNumberSincePowerUp',
      'desc' => [
        'en' => 'Shot Number Since Power Up',
      ],
    ],
    1 => [
      /**
       * table_name : Sony::Tag9400a
       * line : 384398
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag9400a.Sony:ShotNumberSincePowerUp',
      'desc' => [
        'en' => 'Shot Number Since Power Up',
      ],
    ],
    2 => [
      /**
       * table_name : Sony::Tag9400b
       * line : 384631
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag9400b.Sony:ShotNumberSincePowerUp',
      'desc' => [
        'en' => 'Shot Number Since Power Up',
      ],
    ],
    3 => [
      /**
       * table_name : Sony::Tag9400c
       * line : 384831
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag9400c.Sony:ShotNumberSincePowerUp',
      'desc' => [
        'en' => 'Shot Number Since Power Up',
      ],
    ],
  ];

}
