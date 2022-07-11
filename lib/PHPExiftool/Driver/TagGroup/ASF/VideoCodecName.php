<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\ASF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class VideoCodecName extends AbstractTagGroup
{

  protected string $id = 'ASF:VideoCodecName';

  protected string $name = 'VideoCodecName';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Video Codec Name',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : ASF::CodecList
       * line : 888
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'ASF::CodecList.ASF:VideoCodecName',
      'desc' => [
        'en' => 'Video Codec Name',
      ],
    ],
  ];

}
