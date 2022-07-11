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
class AFPointSelected extends AbstractTagGroup
{

  protected string $id = 'Sony:AFPointSelected';

  protected string $name = 'AFPointSelected';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'AF Point Selected',
    'fr' => 'Point AF sélectionné',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::CameraInfo
       * line : 345370
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::CameraInfo.Sony:AFPointSelected',
      'desc' => [
        'en' => 'AF Point Selected',
        'fr' => 'Point AF sélectionné',
      ],
    ],
    1 => [
      /**
       * table_name : Sony::CameraInfo2
       * line : 345920
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::CameraInfo2.Sony:AFPointSelected',
      'desc' => [
        'en' => 'AF Point Selected',
        'fr' => 'Point AF sélectionné',
      ],
    ],
    2 => [
      /**
       * table_name : Sony::CameraInfo3
       * line : 346311
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::CameraInfo3.Sony:AFPointSelected',
      'desc' => [
        'en' => 'AF Point Selected',
        'fr' => 'Point AF sélectionné',
      ],
    ],
    3 => [
      /**
       * table_name : Sony::CameraInfo3
       * line : 346538
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::CameraInfo3.Sony:AFPointSelected',
      'desc' => [
        'en' => 'AF Point Selected',
        'fr' => 'Point AF sélectionné',
      ],
    ],
    4 => [
      /**
       * table_name : Sony::Main
       * line : 354963
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Main.Sony:AFPointSelected',
      'desc' => [
        'en' => 'AF Point Selected',
        'fr' => 'Point AF sélectionné',
      ],
    ],
    5 => [
      /**
       * table_name : Sony::Main
       * line : 355103
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Main.Sony:AFPointSelected',
      'desc' => [
        'en' => 'AF Point Selected',
        'fr' => 'Point AF sélectionné',
      ],
    ],
    6 => [
      /**
       * table_name : Sony::Main
       * line : 355361
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Main.Sony:AFPointSelected',
      'desc' => [
        'en' => 'AF Point Selected',
        'fr' => 'Point AF sélectionné',
      ],
    ],
    7 => [
      /**
       * table_name : Sony::Main
       * line : 355619
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Main.Sony:AFPointSelected',
      'desc' => [
        'en' => 'AF Point Selected',
        'fr' => 'Point AF sélectionné',
      ],
    ],
    8 => [
      /**
       * table_name : Sony::Main
       * line : 355660
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Main.Sony:AFPointSelected',
      'desc' => [
        'en' => 'AF Point Selected',
        'fr' => 'Point AF sélectionné',
      ],
    ],
  ];

}
