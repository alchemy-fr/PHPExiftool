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
class Flash extends AbstractTagGroup
{

  protected string $id = 'Minolta:Flash';

  protected string $name = 'Flash';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Flash',
    'fr' => 'Flash',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Minolta::CameraSettings5D
       * line : 178942
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Minolta::CameraSettings5D.Minolta:Flash',
      'desc' => [
        'en' => 'Flash',
        'fr' => 'Flash',
      ],
    ],
    1 => [
      /**
       * table_name : Minolta::CameraSettings7D
       * line : 179996
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Minolta::CameraSettings7D.Minolta:Flash',
      'desc' => [
        'en' => 'Flash',
        'fr' => 'Flash',
      ],
    ],
  ];

}
