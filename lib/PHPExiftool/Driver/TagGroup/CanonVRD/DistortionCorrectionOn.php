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
class DistortionCorrectionOn extends AbstractTagGroup
{

  protected string $id = 'CanonVRD:DistortionCorrectionOn';

  protected string $name = 'DistortionCorrectionOn';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Distortion Correction On',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : CanonVRD::DR4
       * line : 80912
       * type : ?
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'CanonVRD::DR4.CanonVRD:DistortionCorrectionOn',
      'desc' => [
        'en' => 'Distortion Correction On',
      ],
    ],
    1 => [
      /**
       * table_name : CanonVRD::Ver2
       * line : 83457
       * type : int16s
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'CanonVRD::Ver2.CanonVRD:DistortionCorrectionOn',
      'desc' => [
        'en' => 'Distortion Correction On',
      ],
    ],
  ];

}
