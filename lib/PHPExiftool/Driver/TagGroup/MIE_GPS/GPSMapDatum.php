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
class GPSMapDatum extends AbstractTagGroup
{

  protected string $id = 'MIE-GPS:GPSMapDatum';

  protected string $name = 'GPSMapDatum';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'GPS Map Datum',
    'fr' => 'Données de surveillance géodésique utilisées',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MIE::GPS
       * line : 163856
       * type : string
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'MIE::GPS.MIE-GPS:GPSMapDatum',
      'desc' => [
        'en' => 'GPS Map Datum',
        'fr' => 'Données de surveillance géodésique utilisées',
      ],
    ],
  ];

}
