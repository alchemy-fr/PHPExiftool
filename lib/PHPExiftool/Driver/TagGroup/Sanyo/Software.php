<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Sanyo;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Software extends AbstractTagGroup
{

  protected string $id = 'Sanyo:Software';

  protected string $name = 'Software';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Software',
    'fr' => 'Logiciel',
  ];

  protected int $count = 32;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sanyo::MP4
       * line : 336406
       * type : undef
       * writable : false
       * count : 32
       * flags : Permanent
       */
      'id' => 'Sanyo::MP4.Sanyo:Software',
      'desc' => [
        'en' => 'Software',
        'fr' => 'Logiciel',
      ],
    ],
    1 => [
      /**
       * table_name : Sanyo::MP4
       * line : 336423
       * type : undef
       * writable : false
       * count : 32
       * flags : Permanent
       */
      'id' => 'Sanyo::MP4.Sanyo:Software',
      'desc' => [
        'en' => 'Software',
        'fr' => 'Logiciel',
      ],
    ],
  ];

}
