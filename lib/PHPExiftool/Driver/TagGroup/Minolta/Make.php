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
class Make extends AbstractTagGroup
{

  protected string $id = 'Minolta:Make';

  protected string $name = 'Make';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Make',
    'fr' => 'Fabricant',
  ];

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Minolta::MMA
       * line : 182874
       * type : string
       * writable : false
       * count : 20
       * flags : Permanent
       */
      'id' => 'Minolta::MMA.Minolta:Make',
      'desc' => [
        'en' => 'Make',
        'fr' => 'Fabricant',
      ],
    ],
    1 => [
      /**
       * table_name : Minolta::MOV1
       * line : 182903
       * type : string
       * writable : false
       * count : 32
       * flags : Permanent
       */
      'id' => 'Minolta::MOV1.Minolta:Make',
      'desc' => [
        'en' => 'Make',
        'fr' => 'Fabricant',
      ],
    ],
    2 => [
      /**
       * table_name : Minolta::MOV2
       * line : 183000
       * type : string
       * writable : false
       * count : 32
       * flags : Permanent
       */
      'id' => 'Minolta::MOV2.Minolta:Make',
      'desc' => [
        'en' => 'Make',
        'fr' => 'Fabricant',
      ],
    ],
  ];

}
