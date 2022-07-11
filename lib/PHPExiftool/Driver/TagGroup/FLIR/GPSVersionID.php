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
class GPSVersionID extends AbstractTagGroup
{

  protected string $id = 'FLIR:GPSVersionID';

  protected string $name = 'GPSVersionID';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'GPS Version ID',
    'fr' => 'Version de tag GPS',
  ];

  protected int $count = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : FLIR::GPSInfo
       * line : 123014
       * type : undef
       * writable : false
       * count : 4
       * flags : 
       */
      'id' => 'FLIR::GPSInfo.FLIR:GPSVersionID',
      'desc' => [
        'en' => 'GPS Version ID',
        'fr' => 'Version de tag GPS',
      ],
    ],
  ];

}
