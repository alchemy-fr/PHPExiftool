<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\FLIR;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class GPSMapDatum extends AbstractTagGroup
{

  protected string $id = 'FLIR:GPSMapDatum';

  protected string $name = 'GPSMapDatum';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'GPS Map Datum',
    'fr' => 'Données de surveillance géodésique utilisées',
  ];

  protected int $count = 16;

  protected array $tags = [
    0 => [
      /**
       * table_name : FLIR::GPSInfo
       * line : 123446
       * type : string
       * writable : false
       * count : 16
       * flags : 
       */
      'id' => 'FLIR::GPSInfo.FLIR:GPSMapDatum',
      'desc' => [
        'en' => 'GPS Map Datum',
        'fr' => 'Données de surveillance géodésique utilisées',
      ],
    ],
  ];

}
