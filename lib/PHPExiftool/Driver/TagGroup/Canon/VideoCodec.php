<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Canon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class VideoCodec extends AbstractTagGroup
{

  protected string $id = 'Canon:VideoCodec';

  protected string $name = 'VideoCodec';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Video Codec',
  ];

  protected int $count = 4;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::MovieInfo
       * line : 66908
       * type : undef
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Canon::MovieInfo.Canon:VideoCodec',
      'desc' => [
        'en' => 'Video Codec',
      ],
    ],
  ];

}
