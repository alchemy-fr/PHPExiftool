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
class LensSpecFeatures extends AbstractTagGroup
{

  protected string $id = 'Sony:LensSpecFeatures';

  protected string $name = 'LensSpecFeatures';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Lens Spec Features',
  ];

  protected int $count = 2;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::Tag9050a
       * line : 381614
       * type : undef
       * writable : true
       * count : 2
       * flags : Permanent
       */
      'id' => 'Sony::Tag9050a.Sony:LensSpecFeatures',
      'desc' => [
        'en' => 'Lens Spec Features',
      ],
    ],
    1 => [
      /**
       * table_name : Sony::Tag9050a
       * line : 381617
       * type : undef
       * writable : true
       * count : 2
       * flags : Permanent
       */
      'id' => 'Sony::Tag9050a.Sony:LensSpecFeatures',
      'desc' => [
        'en' => 'Lens Spec Features',
      ],
    ],
    2 => [
      /**
       * table_name : Sony::Tag9050b
       * line : 383982
       * type : undef
       * writable : true
       * count : 2
       * flags : Permanent
       */
      'id' => 'Sony::Tag9050b.Sony:LensSpecFeatures',
      'desc' => [
        'en' => 'Lens Spec Features',
      ],
    ],
    3 => [
      /**
       * table_name : Sony::Tag9050b
       * line : 384005
       * type : undef
       * writable : true
       * count : 2
       * flags : Permanent
       */
      'id' => 'Sony::Tag9050b.Sony:LensSpecFeatures',
      'desc' => [
        'en' => 'Lens Spec Features',
      ],
    ],
    4 => [
      /**
       * table_name : Sony::Tag9050b
       * line : 384019
       * type : undef
       * writable : true
       * count : 2
       * flags : Permanent
       */
      'id' => 'Sony::Tag9050b.Sony:LensSpecFeatures',
      'desc' => [
        'en' => 'Lens Spec Features',
      ],
    ],
    5 => [
      /**
       * table_name : Sony::Tag9050b
       * line : 384033
       * type : undef
       * writable : true
       * count : 2
       * flags : Permanent
       */
      'id' => 'Sony::Tag9050b.Sony:LensSpecFeatures',
      'desc' => [
        'en' => 'Lens Spec Features',
      ],
    ],
    6 => [
      /**
       * table_name : Sony::Tag9050b
       * line : 384047
       * type : undef
       * writable : true
       * count : 2
       * flags : Permanent
       */
      'id' => 'Sony::Tag9050b.Sony:LensSpecFeatures',
      'desc' => [
        'en' => 'Lens Spec Features',
      ],
    ],
  ];

}
