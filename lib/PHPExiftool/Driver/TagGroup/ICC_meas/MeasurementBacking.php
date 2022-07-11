<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\ICC_meas;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MeasurementBacking extends AbstractTagGroup
{

  protected string $id = 'ICC-meas:MeasurementBacking';

  protected string $name = 'MeasurementBacking';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Measurement Backing',
    'fr' => 'Support de mesure',
  ];

  protected int $count = 3;

  protected array $tags = [
    0 => [
      /**
       * table_name : ICC_Profile::Measurement
       * line : 147276
       * type : fixed32s
       * writable : false
       * count : 3
       * flags : 
       */
      'id' => 'ICC_Profile::Measurement.ICC-meas:MeasurementBacking',
      'desc' => [
        'en' => 'Measurement Backing',
        'fr' => 'Support de mesure',
      ],
    ],
  ];

}
