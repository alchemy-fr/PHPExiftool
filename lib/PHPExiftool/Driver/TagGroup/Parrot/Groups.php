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
class Groups extends AbstractTagGroup
{

  protected string $id = 'Parrot:Groups';

  protected string $name = 'Groups';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Groups',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Parrot::V2
       * line : 282765
       * type : int8u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Parrot::V2.Parrot:Groups',
      'desc' => [
        'en' => 'Groups',
      ],
    ],
  ];

}
