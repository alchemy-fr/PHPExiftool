<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\KodakIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class NoiseReductionParametersAtCapture extends AbstractTagGroup
{

  protected string $id = 'KodakIFD:NoiseReductionParametersAtCapture';

  protected string $name = 'NoiseReductionParametersAtCapture';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Noise Reduction Parameters At Capture',
  ];

  protected int $count = 6;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Kodak::IFD
       * line : 157009
       * type : int16u
       * writable : true
       * count : 6
       * flags : Permanent
       */
      'id' => 'Kodak::IFD.KodakIFD:NoiseReductionParametersAtCapture',
      'desc' => [
        'en' => 'Noise Reduction Parameters At Capture',
      ],
    ],
  ];

}
