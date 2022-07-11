<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\PhaseOne;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class LinearizationCoefficients2 extends AbstractTagGroup
{

  protected string $id = 'PhaseOne:LinearizationCoefficients2';

  protected string $name = 'LinearizationCoefficients2';

  protected ?string $phpType = 'float';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Linearization Coefficients 2',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : PhaseOne::SensorCalibration
       * line : 304007
       * type : float
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'PhaseOne::SensorCalibration.PhaseOne:LinearizationCoefficients2',
      'desc' => [
        'en' => 'Linearization Coefficients 2',
      ],
    ],
  ];

}
