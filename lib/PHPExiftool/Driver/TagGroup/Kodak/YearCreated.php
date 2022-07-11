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
class YearCreated extends AbstractTagGroup
{

  protected string $id = 'Kodak:YearCreated';

  protected string $name = 'YearCreated';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Year Created',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Kodak::Main
       * line : 158100
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Kodak::Main.Kodak:YearCreated',
      'desc' => [
        'en' => 'Year Created',
      ],
    ],
    1 => [
      /**
       * table_name : Kodak::Type3
       * line : 160366
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Kodak::Type3.Kodak:YearCreated',
      'desc' => [
        'en' => 'Year Created',
      ],
    ],
  ];

}
