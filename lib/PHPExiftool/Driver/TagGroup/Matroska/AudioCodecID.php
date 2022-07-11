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
class AudioCodecID extends AbstractTagGroup
{

  protected string $id = 'Matroska:AudioCodecID';

  protected string $name = 'AudioCodecID';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Audio Codec ID',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Matroska::Main
       * line : 173534
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Matroska::Main.Matroska:AudioCodecID',
      'desc' => [
        'en' => 'Audio Codec ID',
      ],
    ],
  ];

}
