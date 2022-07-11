<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Olympus;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RawDevNoiseReduction extends AbstractTagGroup
{

  protected string $id = 'Olympus:RawDevNoiseReduction';

  protected string $name = 'RawDevNoiseReduction';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Raw Dev Noise Reduction',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Olympus::RawDevelopment
       * line : 260654
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Olympus::RawDevelopment.Olympus:RawDevNoiseReduction',
      'desc' => [
        'en' => 'Raw Dev Noise Reduction',
      ],
    ],
    1 => [
      /**
       * table_name : Olympus::RawDevelopment2
       * line : 260837
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Olympus::RawDevelopment2.Olympus:RawDevNoiseReduction',
      'desc' => [
        'en' => 'Raw Dev Noise Reduction',
      ],
    ],
  ];

}
