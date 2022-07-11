<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Olympus;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CameraTemperature extends AbstractTagGroup
{

  protected string $id = 'Olympus:CameraTemperature';

  protected string $name = 'CameraTemperature';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Camera Temperature',
    'fr' => 'Température de l\'appareil',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Olympus::ImageProcessing
       * line : 255913
       * type : int16u
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Olympus::ImageProcessing.Olympus:CameraTemperature',
      'desc' => [
        'en' => 'Camera Temperature',
        'fr' => 'Température de l\'appareil',
      ],
    ],
  ];

}
