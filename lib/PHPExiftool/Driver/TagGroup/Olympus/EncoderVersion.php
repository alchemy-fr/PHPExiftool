<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Olympus;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class EncoderVersion extends AbstractTagGroup
{

  protected string $id = 'Olympus:EncoderVersion';

  protected string $name = 'EncoderVersion';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Encoder Version',
  ];

  protected int $count = 16;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Olympus::MovableInfo
       * line : 259575
       * type : string
       * writable : false
       * count : 16
       * flags : Permanent
       */
      'id' => 'Olympus::MovableInfo.Olympus:EncoderVersion',
      'desc' => [
        'en' => 'Encoder Version',
      ],
    ],
  ];

}
