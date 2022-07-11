<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\GPS;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class GPSDestLatitudeRef extends AbstractTagGroup
{

  protected string $id = 'GPS:GPSDestLatitudeRef';

  protected string $name = 'GPSDestLatitudeRef';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'GPS Dest Latitude Ref',
    'fr' => 'Référence de la latitude de destination',
  ];

  protected int $count = 2;

  protected array $tags = [
    0 => [
      /**
       * table_name : GPS::Main
       * line : 132682
       * type : string
       * writable : true
       * count : 2
       * flags : 
       */
      'id' => 'GPS::Main.GPS:GPSDestLatitudeRef',
      'desc' => [
        'en' => 'GPS Dest Latitude Ref',
        'fr' => 'Référence de la latitude de destination',
      ],
    ],
  ];

}
