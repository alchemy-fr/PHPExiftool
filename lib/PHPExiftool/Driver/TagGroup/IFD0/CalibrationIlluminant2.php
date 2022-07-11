<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\IFD0;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CalibrationIlluminant2 extends AbstractTagGroup
{

  protected string $id = 'IFD0:CalibrationIlluminant2';

  protected string $name = 'CalibrationIlluminant2';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Calibration Illuminant 2',
    'fr' => 'Illuminant de calibration 2',
  ];

  protected int $count = 0;

  protected int $flags = 16;

  protected array $tags = [
    0 => [
      /**
       * table_name : Exif::Main
       * line : 119942
       * type : int16u
       * writable : true
       * count : 
       * flags : Unsafe
       */
      'id' => 'Exif::Main.IFD0:CalibrationIlluminant2',
      'desc' => [
        'en' => 'Calibration Illuminant 2',
        'fr' => 'Illuminant de calibration 2',
      ],
    ],
  ];

}
