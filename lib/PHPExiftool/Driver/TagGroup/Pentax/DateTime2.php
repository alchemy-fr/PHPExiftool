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
class DateTime2 extends AbstractTagGroup
{

  protected string $id = 'Pentax:DateTime2';

  protected string $name = 'DateTime2';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Date Time 2',
  ];

  protected int $count = 24;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Pentax::Junk2
       * line : 288727
       * type : string
       * writable : false
       * count : 24
       * flags : Permanent
       */
      'id' => 'Pentax::Junk2.Pentax:DateTime2',
      'desc' => [
        'en' => 'Date Time 2',
      ],
    ],
    1 => [
      /**
       * table_name : Pentax::PENT
       * line : 301398
       * type : string
       * writable : false
       * count : 24
       * flags : Permanent
       */
      'id' => 'Pentax::PENT.Pentax:DateTime2',
      'desc' => [
        'en' => 'Date Time 2',
      ],
    ],
  ];

}
