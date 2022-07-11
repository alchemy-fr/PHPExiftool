<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Panasonic;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ContrastMode extends AbstractTagGroup
{

  protected string $id = 'Panasonic:ContrastMode';

  protected string $name = 'ContrastMode';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Contrast Mode',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Panasonic::Main
       * line : 276486
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Panasonic::Main.Panasonic:ContrastMode',
      'desc' => [
        'en' => 'Contrast Mode',
      ],
    ],
    1 => [
      /**
       * table_name : Panasonic::Main
       * line : 276546
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Panasonic::Main.Panasonic:ContrastMode',
      'desc' => [
        'en' => 'Contrast Mode',
      ],
    ],
    2 => [
      /**
       * table_name : Panasonic::Main
       * line : 276707
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Panasonic::Main.Panasonic:ContrastMode',
      'desc' => [
        'en' => 'Contrast Mode',
      ],
    ],
    3 => [
      /**
       * table_name : Panasonic::Main
       * line : 276729
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Panasonic::Main.Panasonic:ContrastMode',
      'desc' => [
        'en' => 'Contrast Mode',
      ],
    ],
  ];

}
