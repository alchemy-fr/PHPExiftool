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
class LuminanceNoiseReduction extends AbstractTagGroup
{

  protected string $id = 'CanonVRD:LuminanceNoiseReduction';

  protected string $name = 'LuminanceNoiseReduction';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Luminance Noise Reduction',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : CanonVRD::DR4
       * line : 80658
       * type : ?
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'CanonVRD::DR4.CanonVRD:LuminanceNoiseReduction',
      'desc' => [
        'en' => 'Luminance Noise Reduction',
      ],
    ],
    1 => [
      /**
       * table_name : CanonVRD::Ver2
       * line : 83245
       * type : int16s
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'CanonVRD::Ver2.CanonVRD:LuminanceNoiseReduction',
      'desc' => [
        'en' => 'Luminance Noise Reduction',
      ],
    ],
    2 => [
      /**
       * table_name : CanonVRD::Ver2
       * line : 83277
       * type : int16s
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'CanonVRD::Ver2.CanonVRD:LuminanceNoiseReduction',
      'desc' => [
        'en' => 'Luminance Noise Reduction',
      ],
    ],
  ];

}
