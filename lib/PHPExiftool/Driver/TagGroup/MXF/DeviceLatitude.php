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
class DeviceLatitude extends AbstractTagGroup
{

  protected string $id = 'MXF:DeviceLatitude';

  protected string $name = 'DeviceLatitude';

  protected ?string $phpType = 'float';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Device Latitude',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 168615
       * type : float
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:DeviceLatitude',
      'desc' => [
        'en' => 'Device Latitude',
      ],
    ],
    1 => [
      /**
       * table_name : MXF::Main
       * line : 168618
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:DeviceLatitude',
      'desc' => [
        'en' => 'Device Latitude',
      ],
    ],
    2 => [
      /**
       * table_name : MXF::Main
       * line : 170715
       * type : double
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:DeviceLatitude',
      'desc' => [
        'en' => 'Device Latitude',
      ],
    ],
  ];

}
