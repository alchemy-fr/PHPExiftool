<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Pentax;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FNumber extends AbstractTagGroup
{

  protected string $id = 'Pentax:FNumber';

  protected string $name = 'FNumber';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'F Number',
    'fr' => 'Nombre F',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Pentax::Junk2
       * line : 288706
       * type : rational64u
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Pentax::Junk2.Pentax:FNumber',
      'desc' => [
        'en' => 'F Number',
        'fr' => 'Nombre F',
      ],
    ],
    1 => [
      /**
       * table_name : Pentax::MOV
       * line : 294892
       * type : rational64u
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Pentax::MOV.Pentax:FNumber',
      'desc' => [
        'en' => 'F Number',
        'fr' => 'Nombre F',
      ],
    ],
    2 => [
      /**
       * table_name : Pentax::Main
       * line : 297427
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Pentax::Main.Pentax:FNumber',
      'desc' => [
        'en' => 'F Number',
        'fr' => 'Nombre F',
      ],
    ],
    3 => [
      /**
       * table_name : Pentax::PENT
       * line : 301341
       * type : rational64u
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Pentax::PENT.Pentax:FNumber',
      'desc' => [
        'en' => 'F Number',
        'fr' => 'Nombre F',
      ],
    ],
  ];

}
