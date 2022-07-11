<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MIE_GPS;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class GPSDestDistance extends AbstractTagGroup
{

  protected string $id = 'MIE-GPS:GPSDestDistance';

  protected string $name = 'GPSDestDistance';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'GPS Dest Distance',
    'fr' => 'Distance à la destination',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MIE::GPS
       * line : 163930
       * type : rational64s
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'MIE::GPS.MIE-GPS:GPSDestDistance',
      'desc' => [
        'en' => 'GPS Dest Distance',
        'fr' => 'Distance à la destination',
      ],
    ],
  ];

}
