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
class Offset3 extends AbstractTagGroup
{

  protected string $id = 'Nikon:Offset3';

  protected string $name = 'Offset3';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Offset 3',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::ShotInfoD6
       * line : 208251
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfoD6.Nikon:Offset3',
      'desc' => [
        'en' => 'Offset 3',
      ],
    ],
    1 => [
      /**
       * table_name : Nikon::ShotInfoZ7II
       * line : 209655
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfoZ7II.Nikon:Offset3',
      'desc' => [
        'en' => 'Offset 3',
      ],
    ],
    2 => [
      /**
       * table_name : Nikon::ShotInfoZ9
       * line : 209738
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfoZ9.Nikon:Offset3',
      'desc' => [
        'en' => 'Offset 3',
      ],
    ],
  ];

}
