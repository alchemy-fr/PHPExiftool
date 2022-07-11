<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Kodak;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MonthDayCreated extends AbstractTagGroup
{

  protected string $id = 'Kodak:MonthDayCreated';

  protected string $name = 'MonthDayCreated';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Month Day Created',
  ];

  protected int $count = 2;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Kodak::Main
       * line : 158104
       * type : int8u
       * writable : true
       * count : 2
       * flags : Permanent
       */
      'id' => 'Kodak::Main.Kodak:MonthDayCreated',
      'desc' => [
        'en' => 'Month Day Created',
      ],
    ],
    1 => [
      /**
       * table_name : Kodak::Type3
       * line : 160370
       * type : int8u
       * writable : true
       * count : 2
       * flags : Permanent
       */
      'id' => 'Kodak::Type3.Kodak:MonthDayCreated',
      'desc' => [
        'en' => 'Month Day Created',
      ],
    ],
  ];

}
