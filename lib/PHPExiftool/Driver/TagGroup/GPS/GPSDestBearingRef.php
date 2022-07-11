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
class GPSDestBearingRef extends AbstractTagGroup
{

  protected string $id = 'GPS:GPSDestBearingRef';

  protected string $name = 'GPSDestBearingRef';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'GPS Dest Bearing Ref',
    'fr' => 'Référence de l\'orientation de la destination',
  ];

  protected int $count = 2;

  protected array $tags = [
    0 => [
      /**
       * table_name : GPS::Main
       * line : 132814
       * type : string
       * writable : true
       * count : 2
       * flags : 
       */
      'id' => 'GPS::Main.GPS:GPSDestBearingRef',
      'desc' => [
        'en' => 'GPS Dest Bearing Ref',
        'fr' => 'Référence de l\'orientation de la destination',
      ],
    ],
  ];

}
