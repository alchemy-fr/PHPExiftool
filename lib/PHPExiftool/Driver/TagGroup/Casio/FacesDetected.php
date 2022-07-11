<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Casio;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FacesDetected extends AbstractTagGroup
{

  protected string $id = 'Casio:FacesDetected';

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
       * table_name : Casio::FaceInfo1
       * line : 83866
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Casio::FaceInfo1.Casio:FacesDetected',
      'desc' => [
        'en' => 'Faces Detected',
      ],
    ],
    1 => [
      /**
       * table_name : Casio::FaceInfo2
       * line : 83943
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Casio::FaceInfo2.Casio:FacesDetected',
      'desc' => [
        'en' => 'Faces Detected',
      ],
    ],
    2 => [
      /**
       * table_name : Casio::Type2
       * line : 85970
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Casio::Type2.Casio:FacesDetected',
      'desc' => [
        'en' => 'Faces Detected',
      ],
    ],
  ];

}
