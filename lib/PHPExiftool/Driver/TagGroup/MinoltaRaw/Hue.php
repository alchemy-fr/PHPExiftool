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
class Hue extends AbstractTagGroup
{

  protected string $id = 'MinoltaRaw:Hue';

  protected string $name = 'Hue';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Hue',
    'fr' => 'Nuance',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : MinoltaRaw::RIF
       * line : 187956
       * type : int8s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'MinoltaRaw::RIF.MinoltaRaw:Hue',
      'desc' => [
        'en' => 'Hue',
        'fr' => 'Nuance',
      ],
    ],
  ];

}
