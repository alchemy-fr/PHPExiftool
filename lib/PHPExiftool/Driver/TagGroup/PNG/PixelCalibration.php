<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\PNG;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PixelCalibration extends AbstractTagGroup
{

  protected string $id = 'PNG:PixelCalibration';

  protected string $name = 'PixelCalibration';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Pixel Calibration',
  ];

  protected int $count = 0;

  protected int $flags = 2;

  protected array $tags = [
    0 => [
      /**
       * table_name : PNG::Main
       * line : 272936
       * type : ?
       * writable : false
       * count : 
       * flags : Binary
       */
      'id' => 'PNG::Main.PNG:PixelCalibration',
      'desc' => [
        'en' => 'Pixel Calibration',
      ],
    ],
  ];

}
