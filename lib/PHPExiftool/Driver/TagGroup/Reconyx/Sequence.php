<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Reconyx;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Sequence extends AbstractTagGroup
{

  protected string $id = 'Reconyx:Sequence';

  protected string $name = 'Sequence';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Sequence',
  ];

  protected int $count = 2;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Reconyx::Main
       * line : 330965
       * type : int16u
       * writable : true
       * count : 2
       * flags : Permanent
       */
      'id' => 'Reconyx::Main.Reconyx:Sequence',
      'desc' => [
        'en' => 'Sequence',
      ],
    ],
    1 => [
      /**
       * table_name : Reconyx::Type2
       * line : 331200
       * type : int8u
       * writable : true
       * count : 2
       * flags : Permanent
       */
      'id' => 'Reconyx::Type2.Reconyx:Sequence',
      'desc' => [
        'en' => 'Sequence',
      ],
    ],
    2 => [
      /**
       * table_name : Reconyx::Type3
       * line : 331425
       * type : int16u
       * writable : true
       * count : 2
       * flags : Permanent
       */
      'id' => 'Reconyx::Type3.Reconyx:Sequence',
      'desc' => [
        'en' => 'Sequence',
      ],
    ],
  ];

}
