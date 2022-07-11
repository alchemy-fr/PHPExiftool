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
class FacesDetected extends AbstractTagGroup
{

  protected string $id = 'Sony:FacesDetected';

  protected string $name = 'FacesDetected';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Faces Detected',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::FaceInfo
       * line : 352960
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::FaceInfo.Sony:FacesDetected',
      'desc' => [
        'en' => 'Faces Detected',
      ],
    ],
    1 => [
      /**
       * table_name : Sony::FaceInfoA
       * line : 353135
       * type : int16u
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::FaceInfoA.Sony:FacesDetected',
      'desc' => [
        'en' => 'Faces Detected',
      ],
    ],
    2 => [
      /**
       * table_name : Sony::ShotInfo
       * line : 362375
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::ShotInfo.Sony:FacesDetected',
      'desc' => [
        'en' => 'Faces Detected',
      ],
    ],
    3 => [
      /**
       * table_name : Sony::Tag900b
       * line : 379357
       * type : ?
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag900b.Sony:FacesDetected',
      'desc' => [
        'en' => 'Faces Detected',
      ],
    ],
  ];

}
