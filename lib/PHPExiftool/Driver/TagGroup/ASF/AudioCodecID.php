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
class AudioCodecID extends AbstractTagGroup
{

  protected string $id = 'ASF:AudioCodecID';

  protected string $name = 'AudioCodecID';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Audio Codec ID',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : ASF::StreamProperties
       * line : 2096
       * type : int16u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'ASF::StreamProperties.ASF:AudioCodecID',
      'desc' => [
        'en' => 'Audio Codec ID',
      ],
    ],
  ];

}
