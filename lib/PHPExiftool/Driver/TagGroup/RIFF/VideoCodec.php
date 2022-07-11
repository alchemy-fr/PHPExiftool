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
class VideoCodec extends AbstractTagGroup
{

  protected string $id = 'RIFF:VideoCodec';

  protected string $name = 'VideoCodec';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Video Codec',
  ];

  protected int $count = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : RIFF::StreamHeader
       * line : 329141
       * type : string
       * writable : false
       * count : 4
       * flags : 
       */
      'id' => 'RIFF::StreamHeader.RIFF:VideoCodec',
      'desc' => [
        'en' => 'Video Codec',
      ],
    ],
  ];

}
