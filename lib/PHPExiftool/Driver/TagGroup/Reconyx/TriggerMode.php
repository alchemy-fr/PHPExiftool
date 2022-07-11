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
class TriggerMode extends AbstractTagGroup
{

  protected string $id = 'Reconyx:TriggerMode';

  protected string $name = 'TriggerMode';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Trigger Mode',
  ];

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Reconyx::Main
       * line : 330943
       * type : string
       * writable : true
       * count : 2
       * flags : Permanent
       */
      'id' => 'Reconyx::Main.Reconyx:TriggerMode',
      'desc' => [
        'en' => 'Trigger Mode',
      ],
    ],
    1 => [
      /**
       * table_name : Reconyx::Type2
       * line : 331182
       * type : undef
       * writable : true
       * count : 1
       * flags : Permanent
       */
      'id' => 'Reconyx::Type2.Reconyx:TriggerMode',
      'desc' => [
        'en' => 'Trigger Mode',
      ],
    ],
    2 => [
      /**
       * table_name : Reconyx::Type3
       * line : 331407
       * type : string
       * writable : true
       * count : 2
       * flags : Permanent
       */
      'id' => 'Reconyx::Type3.Reconyx:TriggerMode',
      'desc' => [
        'en' => 'Trigger Mode',
      ],
    ],
  ];

}
