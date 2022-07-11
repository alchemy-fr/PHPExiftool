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
class DestinationDST extends AbstractTagGroup
{

  protected string $id = 'Pentax:DestinationDST';

  protected string $name = 'DestinationDST';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Destination DST',
    'fr' => 'Heure d\'été de destination',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Pentax::Main
       * line : 299030
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Pentax::Main.Pentax:DestinationDST',
      'desc' => [
        'en' => 'Destination DST',
        'fr' => 'Heure d\'été de destination',
      ],
    ],
    1 => [
      /**
       * table_name : Pentax::TimeInfo
       * line : 302230
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Pentax::TimeInfo.Pentax:DestinationDST',
      'desc' => [
        'en' => 'Destination DST',
        'fr' => 'Heure d\'été de destination',
      ],
    ],
  ];

}
