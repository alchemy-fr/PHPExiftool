<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MXF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FrameCenterLongitude extends AbstractTagGroup
{

  protected string $id = 'MXF:FrameCenterLongitude';

  protected string $name = 'FrameCenterLongitude';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Frame Center Longitude',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 168642
       * type : double
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:FrameCenterLongitude',
      'desc' => [
        'en' => 'Frame Center Longitude',
      ],
    ],
    1 => [
      /**
       * table_name : MXF::Main
       * line : 168645
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:FrameCenterLongitude',
      'desc' => [
        'en' => 'Frame Center Longitude',
      ],
    ],
    2 => [
      /**
       * table_name : MXF::Main
       * line : 170724
       * type : double
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:FrameCenterLongitude',
      'desc' => [
        'en' => 'Frame Center Longitude',
      ],
    ],
  ];

}
