<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MinoltaRaw;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class WBMode extends AbstractTagGroup
{

  protected string $id = 'MinoltaRaw:WBMode';

  protected string $name = 'WBMode';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'WB Mode',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : MinoltaRaw::RIF
       * line : 187236
       * type : int8u
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'MinoltaRaw::RIF.MinoltaRaw:WBMode',
      'desc' => [
        'en' => 'WB Mode',
      ],
    ],
  ];

}
