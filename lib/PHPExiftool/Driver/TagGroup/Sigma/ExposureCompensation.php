<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Sigma;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ExposureCompensation extends AbstractTagGroup
{

  protected string $id = 'Sigma:ExposureCompensation';

  protected string $name = 'ExposureCompensation';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Exposure Compensation',
    'fr' => 'Décalage d\'exposition',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sigma::Main
       * line : 337544
       * type : string
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sigma::Main.Sigma:ExposureCompensation',
      'desc' => [
        'en' => 'Exposure Compensation',
        'fr' => 'Décalage d\'exposition',
      ],
    ],
    1 => [
      /**
       * table_name : Sigma::Main
       * line : 339285
       * type : rational64s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sigma::Main.Sigma:ExposureCompensation',
      'desc' => [
        'en' => 'Exposure Compensation',
        'fr' => 'Décalage d\'exposition',
      ],
    ],
    2 => [
      /**
       * table_name : Sigma::Main
       * line : 339428
       * type : rational64s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sigma::Main.Sigma:ExposureCompensation',
      'desc' => [
        'en' => 'Exposure Compensation',
        'fr' => 'Décalage d\'exposition',
      ],
    ],
  ];

}
