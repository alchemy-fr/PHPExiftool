<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Samsung;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Software extends AbstractTagGroup
{

  protected string $id = 'Samsung:Software';

  protected string $name = 'Software';

  protected ?string $phpType = 'string';

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
       * table_name : Samsung::MP4
       * line : 334349
       * type : string
       * writable : false
       * count : 32
       * flags : Permanent
       */
      'id' => 'Samsung::MP4.Samsung:Software',
      'desc' => [
        'en' => 'Software',
        'fr' => 'Logiciel',
      ],
    ],
  ];

}
