<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MPEG;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AudioBitrate extends AbstractTagGroup
{

  protected string $id = 'MPEG:AudioBitrate';

  protected string $name = 'AudioBitrate';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Audio Bitrate',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MPEG::Audio
       * line : 166039
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MPEG::Audio.MPEG:AudioBitrate',
      'desc' => [
        'en' => 'Audio Bitrate',
      ],
    ],
    1 => [
      /**
       * table_name : MPEG::Audio
       * line : 166043
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MPEG::Audio.MPEG:AudioBitrate',
      'desc' => [
        'en' => 'Audio Bitrate',
      ],
    ],
    2 => [
      /**
       * table_name : MPEG::Audio
       * line : 166047
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MPEG::Audio.MPEG:AudioBitrate',
      'desc' => [
        'en' => 'Audio Bitrate',
      ],
    ],
    3 => [
      /**
       * table_name : MPEG::Audio
       * line : 166051
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MPEG::Audio.MPEG:AudioBitrate',
      'desc' => [
        'en' => 'Audio Bitrate',
      ],
    ],
    4 => [
      /**
       * table_name : MPEG::Audio
       * line : 166055
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MPEG::Audio.MPEG:AudioBitrate',
      'desc' => [
        'en' => 'Audio Bitrate',
      ],
    ],
  ];

}
