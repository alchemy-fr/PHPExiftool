<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\NikonCapture;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class NoiseReductionIntensity extends AbstractTagGroup
{

  protected string $id = 'NikonCapture:NoiseReductionIntensity';

  protected string $name = 'NoiseReductionIntensity';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Noise Reduction Intensity',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : NikonCapture::NoiseReduction
       * line : 211363
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCapture::NoiseReduction.NikonCapture:NoiseReductionIntensity',
      'desc' => [
        'en' => 'Noise Reduction Intensity',
      ],
    ],
  ];

}
