<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Pentax;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AudioCodecID extends AbstractTagGroup
{

  protected string $id = 'Pentax:AudioCodecID';

  protected string $name = 'AudioCodecID';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Audio Codec ID',
  ];

  protected int $count = 4;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Pentax::PENT
       * line : 301837
       * type : string
       * writable : false
       * count : 4
       * flags : Permanent
       */
      'id' => 'Pentax::PENT.Pentax:AudioCodecID',
      'desc' => [
        'en' => 'Audio Codec ID',
      ],
    ],
  ];

}
