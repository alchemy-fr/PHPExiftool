<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\CanonVRD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ChrominanceNoiseReduction extends AbstractTagGroup
{

  protected string $id = 'CanonVRD:ChrominanceNoiseReduction';

  protected string $name = 'ChrominanceNoiseReduction';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Chrominance Noise Reduction',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : CanonVRD::DR4
       * line : 80661
       * type : ?
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'CanonVRD::DR4.CanonVRD:ChrominanceNoiseReduction',
      'desc' => [
        'en' => 'Chrominance Noise Reduction',
      ],
    ],
    1 => [
      /**
       * table_name : CanonVRD::Ver2
       * line : 83145
       * type : int16s
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'CanonVRD::Ver2.CanonVRD:ChrominanceNoiseReduction',
      'desc' => [
        'en' => 'Chrominance Noise Reduction',
      ],
    ],
    2 => [
      /**
       * table_name : CanonVRD::Ver2
       * line : 83177
       * type : int16s
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'CanonVRD::Ver2.CanonVRD:ChrominanceNoiseReduction',
      'desc' => [
        'en' => 'Chrominance Noise Reduction',
      ],
    ],
  ];

}
