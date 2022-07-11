<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\ICC_header;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class DeviceAttributes extends AbstractTagGroup
{

  protected string $id = 'ICC-header:DeviceAttributes';

  protected string $name = 'DeviceAttributes';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Device Attributes',
    'fr' => 'Attributs d\'appareil',
  ];

  protected int $count = 2;

  protected array $tags = [
    0 => [
      /**
       * table_name : ICC_Profile::Header
       * line : 145389
       * type : int32u
       * writable : false
       * count : 2
       * flags : 
       */
      'id' => 'ICC_Profile::Header.ICC-header:DeviceAttributes',
      'desc' => [
        'en' => 'Device Attributes',
        'fr' => 'Attributs d\'appareil',
      ],
    ],
  ];

}
