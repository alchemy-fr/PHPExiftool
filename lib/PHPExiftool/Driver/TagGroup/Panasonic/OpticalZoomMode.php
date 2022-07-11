<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Panasonic;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class OpticalZoomMode extends AbstractTagGroup
{

  protected string $id = 'Panasonic:OpticalZoomMode';

  protected string $name = 'OpticalZoomMode';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Optical Zoom Mode',
    'fr' => 'Mode Zoom optique',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Panasonic::Main
       * line : 276994
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Panasonic::Main.Panasonic:OpticalZoomMode',
      'desc' => [
        'en' => 'Optical Zoom Mode',
        'fr' => 'Mode Zoom optique',
      ],
    ],
  ];

}
