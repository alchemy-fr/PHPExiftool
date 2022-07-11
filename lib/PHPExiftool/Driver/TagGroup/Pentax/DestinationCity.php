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
class DestinationCity extends AbstractTagGroup
{

  protected string $id = 'Pentax:DestinationCity';

  protected string $name = 'DestinationCity';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Destination City',
    'fr' => 'Ville de destination',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Pentax::Main
       * line : 298757
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Pentax::Main.Pentax:DestinationCity',
      'desc' => [
        'en' => 'Destination City',
        'fr' => 'Ville de destination',
      ],
    ],
    1 => [
      /**
       * table_name : Pentax::TimeInfo
       * line : 302503
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Pentax::TimeInfo.Pentax:DestinationCity',
      'desc' => [
        'en' => 'Destination City',
        'fr' => 'Ville de destination',
      ],
    ],
  ];

}
