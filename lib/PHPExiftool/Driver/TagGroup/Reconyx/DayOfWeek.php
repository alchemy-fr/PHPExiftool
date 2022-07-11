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
class DayOfWeek extends AbstractTagGroup
{

  protected string $id = 'Reconyx:DayOfWeek';

  protected string $name = 'DayOfWeek';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Day Of Week',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Reconyx::Type2
       * line : 331229
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Reconyx::Type2.Reconyx:DayOfWeek',
      'desc' => [
        'en' => 'Day Of Week',
      ],
    ],
    1 => [
      /**
       * table_name : Reconyx::Type3
       * line : 331454
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Reconyx::Type3.Reconyx:DayOfWeek',
      'desc' => [
        'en' => 'Day Of Week',
      ],
    ],
  ];

}
