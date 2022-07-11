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
class BayerPattern extends AbstractTagGroup
{

  protected string $id = 'MinoltaRaw:BayerPattern';

  protected string $name = 'BayerPattern';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Bayer Pattern',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : MinoltaRaw::PRD
       * line : 187166
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'MinoltaRaw::PRD.MinoltaRaw:BayerPattern',
      'desc' => [
        'en' => 'Bayer Pattern',
      ],
    ],
  ];

}
