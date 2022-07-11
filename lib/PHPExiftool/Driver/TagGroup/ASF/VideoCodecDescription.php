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
class VideoCodecDescription extends AbstractTagGroup
{

  protected string $id = 'ASF:VideoCodecDescription';

  protected string $name = 'VideoCodecDescription';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Video Codec Description',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : ASF::CodecList
       * line : 884
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'ASF::CodecList.ASF:VideoCodecDescription',
      'desc' => [
        'en' => 'Video Codec Description',
      ],
    ],
  ];

}
