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
class ZoneMatching extends AbstractTagGroup
{

  protected string $id = 'MinoltaRaw:ZoneMatching';

  protected string $name = 'ZoneMatching';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Zone Matching',
    'fr' => 'Ajustage de la zone',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : MinoltaRaw::RIF
       * line : 187894
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'MinoltaRaw::RIF.MinoltaRaw:ZoneMatching',
      'desc' => [
        'en' => 'Zone Matching',
        'fr' => 'Ajustage de la zone',
      ],
    ],
    1 => [
      /**
       * table_name : MinoltaRaw::RIF
       * line : 187994
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'MinoltaRaw::RIF.MinoltaRaw:ZoneMatching',
      'desc' => [
        'en' => 'Zone Matching',
        'fr' => 'Ajustage de la zone',
      ],
    ],
  ];

}
