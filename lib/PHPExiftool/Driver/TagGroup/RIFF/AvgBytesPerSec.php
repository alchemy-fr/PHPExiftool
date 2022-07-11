<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\RIFF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AvgBytesPerSec extends AbstractTagGroup
{

  protected string $id = 'RIFF:AvgBytesPerSec';

  protected string $name = 'AvgBytesPerSec';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Avg Bytes Per Sec',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : RIFF::AudioFormat
       * line : 328080
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'RIFF::AudioFormat.RIFF:AvgBytesPerSec',
      'desc' => [
        'en' => 'Avg Bytes Per Sec',
      ],
    ],
  ];

}
