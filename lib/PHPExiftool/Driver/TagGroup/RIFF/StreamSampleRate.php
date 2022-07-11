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
class StreamSampleRate extends AbstractTagGroup
{

  protected string $id = 'RIFF:StreamSampleRate';

  protected string $name = 'StreamSampleRate';

  protected ?string $phpType = 'float';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Stream Sample Rate',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : RIFF::StreamHeader
       * line : 329155
       * type : rational64u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'RIFF::StreamHeader.RIFF:StreamSampleRate',
      'desc' => [
        'en' => 'Stream Sample Rate',
      ],
    ],
  ];

}
