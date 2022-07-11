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
class FrameCenterLatitude extends AbstractTagGroup
{

  protected string $id = 'MXF:FrameCenterLatitude';

  protected string $name = 'FrameCenterLatitude';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Frame Center Latitude',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 168636
       * type : double
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:FrameCenterLatitude',
      'desc' => [
        'en' => 'Frame Center Latitude',
      ],
    ],
    1 => [
      /**
       * table_name : MXF::Main
       * line : 168639
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:FrameCenterLatitude',
      'desc' => [
        'en' => 'Frame Center Latitude',
      ],
    ],
    2 => [
      /**
       * table_name : MXF::Main
       * line : 170721
       * type : double
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:FrameCenterLatitude',
      'desc' => [
        'en' => 'Frame Center Latitude',
      ],
    ],
  ];

}
