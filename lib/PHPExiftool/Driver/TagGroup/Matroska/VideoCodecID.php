<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Matroska;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class VideoCodecID extends AbstractTagGroup
{

  protected string $id = 'Matroska:VideoCodecID';

  protected string $name = 'VideoCodecID';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Video Codec ID',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Matroska::Main
       * line : 173529
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Matroska::Main.Matroska:VideoCodecID',
      'desc' => [
        'en' => 'Video Codec ID',
      ],
    ],
  ];

}
