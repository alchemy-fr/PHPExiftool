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
class ColorNoiseReductionSharpness extends AbstractTagGroup
{

  protected string $id = 'NikonCapture:ColorNoiseReductionSharpness';

  protected string $name = 'ColorNoiseReductionSharpness';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Color Noise Reduction Sharpness',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : NikonCapture::NoiseReduction
       * line : 211471
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCapture::NoiseReduction.NikonCapture:ColorNoiseReductionSharpness',
      'desc' => [
        'en' => 'Color Noise Reduction Sharpness',
      ],
    ],
  ];

}
