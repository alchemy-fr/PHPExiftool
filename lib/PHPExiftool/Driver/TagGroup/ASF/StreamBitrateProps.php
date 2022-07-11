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
class StreamBitrateProps extends AbstractTagGroup
{

  protected string $id = 'ASF:StreamBitrateProps';

  protected string $name = 'StreamBitrateProps';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Stream Bitrate Props',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : ASF::Header
       * line : 1810
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'ASF::Header.ASF:StreamBitrateProps',
      'desc' => [
        'en' => 'Stream Bitrate Props',
      ],
    ],
  ];

}
