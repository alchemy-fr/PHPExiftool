<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Sony;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class GPSMapDatum extends AbstractTagGroup
{

  protected string $id = 'Sony:GPSMapDatum';

  protected string $name = 'GPSMapDatum';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'GPS Map Datum',
    'fr' => 'Données de surveillance géodésique utilisées',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::rtmd
       * line : 394142
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Sony::rtmd.Sony:GPSMapDatum',
      'desc' => [
        'en' => 'GPS Map Datum',
        'fr' => 'Données de surveillance géodésique utilisées',
      ],
    ],
  ];

}
