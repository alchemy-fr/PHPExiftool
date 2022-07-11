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
class WBScale extends AbstractTagGroup
{

  protected string $id = 'MinoltaRaw:WBScale';

  protected string $name = 'WBScale';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'WB Scale',
  ];

  protected int $count = 4;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : MinoltaRaw::WBG
       * line : 188145
       * type : int8u
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'MinoltaRaw::WBG.MinoltaRaw:WBScale',
      'desc' => [
        'en' => 'WB Scale',
      ],
    ],
  ];

}
