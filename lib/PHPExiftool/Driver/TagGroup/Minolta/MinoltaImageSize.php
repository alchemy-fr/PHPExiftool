<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Minolta;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MinoltaImageSize extends AbstractTagGroup
{

  protected string $id = 'Minolta:MinoltaImageSize';

  protected string $name = 'MinoltaImageSize';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Minolta Image Size',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Minolta::CameraSettings
       * line : 177498
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Minolta::CameraSettings.Minolta:MinoltaImageSize',
      'desc' => [
        'en' => 'Minolta Image Size',
      ],
    ],
    1 => [
      /**
       * table_name : Minolta::CameraSettings5D
       * line : 178724
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Minolta::CameraSettings5D.Minolta:MinoltaImageSize',
      'desc' => [
        'en' => 'Minolta Image Size',
      ],
    ],
    2 => [
      /**
       * table_name : Minolta::CameraSettings7D
       * line : 179704
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Minolta::CameraSettings7D.Minolta:MinoltaImageSize',
      'desc' => [
        'en' => 'Minolta Image Size',
      ],
    ],
    3 => [
      /**
       * table_name : Minolta::Main
       * line : 183996
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Minolta::Main.Minolta:MinoltaImageSize',
      'desc' => [
        'en' => 'Minolta Image Size',
      ],
    ],
  ];

}
