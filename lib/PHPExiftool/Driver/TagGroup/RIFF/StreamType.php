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
class StreamType extends AbstractTagGroup
{

  protected string $id = 'RIFF:StreamType';

  protected string $name = 'StreamType';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Stream Type',
  ];

  protected int $count = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : RIFF::StreamHeader
       * line : 329112
       * type : string
       * writable : false
       * count : 4
       * flags : 
       */
      'id' => 'RIFF::StreamHeader.RIFF:StreamType',
      'desc' => [
        'en' => 'Stream Type',
      ],
    ],
  ];

}
