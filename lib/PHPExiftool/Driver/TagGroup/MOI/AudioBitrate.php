<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MOI;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AudioBitrate extends AbstractTagGroup
{

  protected string $id = 'MOI:AudioBitrate';

  protected string $name = 'AudioBitrate';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Audio Bitrate',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MOI::Main
       * line : 165829
       * type : int8u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MOI::Main.MOI:AudioBitrate',
      'desc' => [
        'en' => 'Audio Bitrate',
      ],
    ],
  ];

}
