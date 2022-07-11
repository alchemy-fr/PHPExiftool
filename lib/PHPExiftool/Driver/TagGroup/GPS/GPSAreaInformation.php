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
class GPSAreaInformation extends AbstractTagGroup
{

  protected string $id = 'GPS:GPSAreaInformation';

  protected string $name = 'GPSAreaInformation';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'GPS Area Information',
    'fr' => 'Nom de la zone GPS',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : GPS::Main
       * line : 132974
       * type : undef
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'GPS::Main.GPS:GPSAreaInformation',
      'desc' => [
        'en' => 'GPS Area Information',
        'fr' => 'Nom de la zone GPS',
      ],
    ],
  ];

}
