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
class FocalPlaneAFPointLocation12 extends AbstractTagGroup
{

  protected string $id = 'Sony:FocalPlaneAFPointLocation12';

  protected string $name = 'FocalPlaneAFPointLocation12';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Focal Plane AF Point Location 12',
  ];

  protected int $count = 2;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::Tag202a
       * line : 379341
       * type : int16u
       * writable : true
       * count : 2
       * flags : Permanent
       */
      'id' => 'Sony::Tag202a.Sony:FocalPlaneAFPointLocation12',
      'desc' => [
        'en' => 'Focal Plane AF Point Location 12',
      ],
    ],
  ];

}
