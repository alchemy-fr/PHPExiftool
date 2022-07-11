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
class DistanceFromHome extends AbstractTagGroup
{

  protected string $id = 'Parrot:DistanceFromHome';

  protected string $name = 'DistanceFromHome';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Distance From Home',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Parrot::V1
       * line : 282500
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Parrot::V1.Parrot:DistanceFromHome',
      'desc' => [
        'en' => 'Distance From Home',
      ],
    ],
  ];

}
