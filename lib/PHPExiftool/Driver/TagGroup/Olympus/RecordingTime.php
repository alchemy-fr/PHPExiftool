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
class RecordingTime extends AbstractTagGroup
{

  protected string $id = 'Olympus:RecordingTime';

  protected string $name = 'RecordingTime';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Recording Time',
  ];

  protected int $count = 6;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Olympus::WAV
       * line : 262604
       * type : undef
       * writable : false
       * count : 6
       * flags : Permanent
       */
      'id' => 'Olympus::WAV.Olympus:RecordingTime',
      'desc' => [
        'en' => 'Recording Time',
      ],
    ],
  ];

}
