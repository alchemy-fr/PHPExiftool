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
class NoiseReduction extends AbstractTagGroup
{

  protected string $id = 'NikonCapture:NoiseReduction';

  protected string $name = 'NoiseReduction';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Noise Reduction',
    'fr' => 'Réduction du bruit',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : NikonCapture::Main
       * line : 210909
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCapture::Main.NikonCapture:NoiseReduction',
      'desc' => [
        'en' => 'Noise Reduction',
        'fr' => 'Réduction du bruit',
      ],
    ],
    1 => [
      /**
       * table_name : NikonCapture::NoiseReduction
       * line : 211424
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCapture::NoiseReduction.NikonCapture:NoiseReduction',
      'desc' => [
        'en' => 'Noise Reduction',
        'fr' => 'Réduction du bruit',
      ],
    ],
  ];

}
