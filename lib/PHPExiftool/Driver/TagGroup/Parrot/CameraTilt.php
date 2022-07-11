<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Parrot;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CameraTilt extends AbstractTagGroup
{

  protected string $id = 'Parrot:CameraTilt';

  protected string $name = 'CameraTilt';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Camera Tilt',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Parrot::V1
       * line : 282380
       * type : int16s
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Parrot::V1.Parrot:CameraTilt',
      'desc' => [
        'en' => 'Camera Tilt',
      ],
    ],
    1 => [
      /**
       * table_name : Parrot::V2
       * line : 282662
       * type : int16s
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Parrot::V2.Parrot:CameraTilt',
      'desc' => [
        'en' => 'Camera Tilt',
      ],
    ],
  ];

}
