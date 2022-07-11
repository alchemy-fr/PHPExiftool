<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\FLIR;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PeakSpectralSensitivity extends AbstractTagGroup
{

  protected string $id = 'FLIR:PeakSpectralSensitivity';

  protected string $name = 'PeakSpectralSensitivity';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Peak Spectral Sensitivity',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Composite
       * line : 90560
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Composite.FLIR:PeakSpectralSensitivity',
      'desc' => [
        'en' => 'Peak Spectral Sensitivity',
      ],
    ],
  ];

}
