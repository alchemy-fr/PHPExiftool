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
class Make extends AbstractTagGroup
{

  protected string $id = 'Pentax:Make';

  protected string $name = 'Make';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Make',
    'fr' => 'Fabricant',
  ];

  protected int $count = 24;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Pentax::Junk2
       * line : 288670
       * type : string
       * writable : false
       * count : 24
       * flags : Permanent
       */
      'id' => 'Pentax::Junk2.Pentax:Make',
      'desc' => [
        'en' => 'Make',
        'fr' => 'Fabricant',
      ],
    ],
    1 => [
      /**
       * table_name : Pentax::MOV
       * line : 294856
       * type : string
       * writable : false
       * count : 24
       * flags : Permanent
       */
      'id' => 'Pentax::MOV.Pentax:Make',
      'desc' => [
        'en' => 'Make',
        'fr' => 'Fabricant',
      ],
    ],
    2 => [
      /**
       * table_name : Pentax::PENT
       * line : 301287
       * type : string
       * writable : false
       * count : 24
       * flags : Permanent
       */
      'id' => 'Pentax::PENT.Pentax:Make',
      'desc' => [
        'en' => 'Make',
        'fr' => 'Fabricant',
      ],
    ],
  ];

}
