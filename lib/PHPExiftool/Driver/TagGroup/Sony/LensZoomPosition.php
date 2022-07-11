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
class LensZoomPosition extends AbstractTagGroup
{

  protected string $id = 'Sony:LensZoomPosition';

  protected string $name = 'LensZoomPosition';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Lens Zoom Position',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::Tag9404a
       * line : 385415
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag9404a.Sony:LensZoomPosition',
      'desc' => [
        'en' => 'Lens Zoom Position',
      ],
    ],
    1 => [
      /**
       * table_name : Sony::Tag9404b
       * line : 385669
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag9404b.Sony:LensZoomPosition',
      'desc' => [
        'en' => 'Lens Zoom Position',
      ],
    ],
    2 => [
      /**
       * table_name : Sony::Tag9405b
       * line : 390548
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag9405b.Sony:LensZoomPosition',
      'desc' => [
        'en' => 'Lens Zoom Position',
      ],
    ],
    3 => [
      /**
       * table_name : Sony::Tag9405b
       * line : 390555
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag9405b.Sony:LensZoomPosition',
      'desc' => [
        'en' => 'Lens Zoom Position',
      ],
    ],
    4 => [
      /**
       * table_name : Sony::Tag9405b
       * line : 390562
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag9405b.Sony:LensZoomPosition',
      'desc' => [
        'en' => 'Lens Zoom Position',
      ],
    ],
  ];

}
