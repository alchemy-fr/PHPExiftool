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
class DeviceLongitude extends AbstractTagGroup
{

  protected string $id = 'MXF:DeviceLongitude';

  protected string $name = 'DeviceLongitude';

  protected ?string $phpType = 'float';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Device Longitude',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 168621
       * type : float
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:DeviceLongitude',
      'desc' => [
        'en' => 'Device Longitude',
      ],
    ],
    1 => [
      /**
       * table_name : MXF::Main
       * line : 168624
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:DeviceLongitude',
      'desc' => [
        'en' => 'Device Longitude',
      ],
    ],
    2 => [
      /**
       * table_name : MXF::Main
       * line : 170718
       * type : double
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:DeviceLongitude',
      'desc' => [
        'en' => 'Device Longitude',
      ],
    ],
  ];

}
