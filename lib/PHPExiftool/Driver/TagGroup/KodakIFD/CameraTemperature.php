<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\KodakIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CameraTemperature extends AbstractTagGroup
{

  protected string $id = 'KodakIFD:CameraTemperature';

  protected string $name = 'CameraTemperature';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Camera Temperature',
    'fr' => 'Température de l\'appareil',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Kodak::IFD
       * line : 155206
       * type : rational64s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Kodak::IFD.KodakIFD:CameraTemperature',
      'desc' => [
        'en' => 'Camera Temperature',
        'fr' => 'Température de l\'appareil',
      ],
    ],
    1 => [
      /**
       * table_name : Kodak::IFD
       * line : 155217
       * type : ?
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Kodak::IFD.KodakIFD:CameraTemperature',
      'desc' => [
        'en' => 'Camera Temperature',
        'fr' => 'Température de l\'appareil',
      ],
    ],
  ];

}
