<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Saturation extends AbstractTagGroup
{

  protected string $id = 'Nikon:Saturation';

  protected string $name = 'Saturation';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Saturation',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::Main
       * line : 199763
       * type : string
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::Main.Nikon:Saturation',
      'desc' => [
        'en' => 'Saturation',
      ],
    ],
    1 => [
      /**
       * table_name : Nikon::PictureControl
       * line : 204078
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::PictureControl.Nikon:Saturation',
      'desc' => [
        'en' => 'Saturation',
      ],
    ],
    2 => [
      /**
       * table_name : Nikon::PictureControl2
       * line : 204392
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::PictureControl2.Nikon:Saturation',
      'desc' => [
        'en' => 'Saturation',
      ],
    ],
    3 => [
      /**
       * table_name : Nikon::PictureControl3
       * line : 204718
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::PictureControl3.Nikon:Saturation',
      'desc' => [
        'en' => 'Saturation',
      ],
    ],
  ];

}
