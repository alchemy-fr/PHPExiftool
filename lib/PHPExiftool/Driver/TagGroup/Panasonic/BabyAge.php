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
class BabyAge extends AbstractTagGroup
{

  protected string $id = 'Panasonic:BabyAge';

  protected string $name = 'BabyAge';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Baby Age',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Panasonic::Main
       * line : 276989
       * type : string
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Panasonic::Main.Panasonic:BabyAge',
      'desc' => [
        'en' => 'Baby Age',
      ],
    ],
    1 => [
      /**
       * table_name : Panasonic::Main
       * line : 279008
       * type : string
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Panasonic::Main.Panasonic:BabyAge',
      'desc' => [
        'en' => 'Baby Age',
      ],
    ],
  ];

}
