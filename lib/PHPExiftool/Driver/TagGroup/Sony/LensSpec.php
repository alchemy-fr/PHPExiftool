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
class LensSpec extends AbstractTagGroup
{

  protected string $id = 'Sony:LensSpec';

  protected string $name = 'LensSpec';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Lens Spec',
  ];

  protected int $count = 8;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::CameraInfo
       * line : 345320
       * type : undef
       * writable : true
       * count : 8
       * flags : Permanent
       */
      'id' => 'Sony::CameraInfo.Sony:LensSpec',
      'desc' => [
        'en' => 'Lens Spec',
      ],
    ],
    1 => [
      /**
       * table_name : Sony::CameraInfo2
       * line : 345913
       * type : undef
       * writable : true
       * count : 8
       * flags : Permanent
       */
      'id' => 'Sony::CameraInfo2.Sony:LensSpec',
      'desc' => [
        'en' => 'Lens Spec',
      ],
    ],
    2 => [
      /**
       * table_name : Sony::CameraInfo3
       * line : 346283
       * type : undef
       * writable : true
       * count : 8
       * flags : Permanent
       */
      'id' => 'Sony::CameraInfo3.Sony:LensSpec',
      'desc' => [
        'en' => 'Lens Spec',
      ],
    ],
    3 => [
      /**
       * table_name : Sony::Main
       * line : 359012
       * type : int8u
       * writable : true
       * count : 8
       * flags : Permanent
       */
      'id' => 'Sony::Main.Sony:LensSpec',
      'desc' => [
        'en' => 'Lens Spec',
      ],
    ],
  ];

}
