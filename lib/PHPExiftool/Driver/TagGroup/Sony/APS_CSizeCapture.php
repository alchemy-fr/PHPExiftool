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
class APS_CSizeCapture extends AbstractTagGroup
{

  protected string $id = 'Sony:APS-CSizeCapture';

  protected string $name = 'APS-CSizeCapture';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'APS-C Size Capture',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::Tag9050a
       * line : 381603
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag9050a.Sony:APS-CSizeCapture',
      'desc' => [
        'en' => 'APS-C Size Capture',
      ],
    ],
    1 => [
      /**
       * table_name : Sony::Tag9050b
       * line : 383971
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag9050b.Sony:APS-CSizeCapture',
      'desc' => [
        'en' => 'APS-C Size Capture',
      ],
    ],
    2 => [
      /**
       * table_name : Sony::Tag9050b
       * line : 383994
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag9050b.Sony:APS-CSizeCapture',
      'desc' => [
        'en' => 'APS-C Size Capture',
      ],
    ],
    3 => [
      /**
       * table_name : Sony::Tag9050b
       * line : 384008
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag9050b.Sony:APS-CSizeCapture',
      'desc' => [
        'en' => 'APS-C Size Capture',
      ],
    ],
    4 => [
      /**
       * table_name : Sony::Tag9050b
       * line : 384022
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag9050b.Sony:APS-CSizeCapture',
      'desc' => [
        'en' => 'APS-C Size Capture',
      ],
    ],
    5 => [
      /**
       * table_name : Sony::Tag9050b
       * line : 384036
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag9050b.Sony:APS-CSizeCapture',
      'desc' => [
        'en' => 'APS-C Size Capture',
      ],
    ],
  ];

}
