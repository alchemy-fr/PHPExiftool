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
class Transform extends AbstractTagGroup
{

  protected string $id = 'Panasonic:Transform';

  protected string $name = 'Transform';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Transform',
  ];

  protected int $count = 2;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Panasonic::Main
       * line : 277604
       * type : undef
       * writable : true
       * count : 2
       * flags : Permanent
       */
      'id' => 'Panasonic::Main.Panasonic:Transform',
      'desc' => [
        'en' => 'Transform',
      ],
    ],
    1 => [
      /**
       * table_name : Panasonic::Main
       * line : 279013
       * type : undef
       * writable : true
       * count : 2
       * flags : Permanent
       */
      'id' => 'Panasonic::Main.Panasonic:Transform',
      'desc' => [
        'en' => 'Transform',
      ],
    ],
  ];

}
