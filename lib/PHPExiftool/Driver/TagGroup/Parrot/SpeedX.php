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
class SpeedX extends AbstractTagGroup
{

  protected string $id = 'Parrot:SpeedX';

  protected string $name = 'SpeedX';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Speed X',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Parrot::V1
       * line : 282503
       * type : int16s
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Parrot::V1.Parrot:SpeedX',
      'desc' => [
        'en' => 'Speed X',
      ],
    ],
  ];

}
