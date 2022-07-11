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
class FocalPlaneAFPointsUsed extends AbstractTagGroup
{

  protected string $id = 'Sony:FocalPlaneAFPointsUsed';

  protected string $name = 'FocalPlaneAFPointsUsed';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Focal Plane AF Points Used',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::Main
       * line : 356025
       * type : ?
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Main.Sony:FocalPlaneAFPointsUsed',
      'desc' => [
        'en' => 'Focal Plane AF Points Used',
      ],
    ],
    1 => [
      /**
       * table_name : Sony::Main
       * line : 356033
       * type : ?
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Main.Sony:FocalPlaneAFPointsUsed',
      'desc' => [
        'en' => 'Focal Plane AF Points Used',
      ],
    ],
    2 => [
      /**
       * table_name : Sony::Tag202a
       * line : 379302
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag202a.Sony:FocalPlaneAFPointsUsed',
      'desc' => [
        'en' => 'Focal Plane AF Points Used',
      ],
    ],
  ];

}
