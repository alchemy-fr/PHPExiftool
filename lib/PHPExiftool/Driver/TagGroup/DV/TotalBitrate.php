<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\DV;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class TotalBitrate extends AbstractTagGroup
{

  protected string $id = 'DV:TotalBitrate';

  protected string $name = 'TotalBitrate';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Total Bitrate',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : DV::Main
       * line : 106388
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'DV::Main.DV:TotalBitrate',
      'desc' => [
        'en' => 'Total Bitrate',
      ],
    ],
  ];

}
