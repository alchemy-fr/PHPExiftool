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
class RawDevExposureBiasValue extends AbstractTagGroup
{

  protected string $id = 'Olympus:RawDevExposureBiasValue';

  protected string $name = 'RawDevExposureBiasValue';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Raw Dev Exposure Bias Value',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Olympus::RawDevelopment
       * line : 260569
       * type : rational64s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Olympus::RawDevelopment.Olympus:RawDevExposureBiasValue',
      'desc' => [
        'en' => 'Raw Dev Exposure Bias Value',
      ],
    ],
    1 => [
      /**
       * table_name : Olympus::RawDevelopment2
       * line : 260761
       * type : rational64s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Olympus::RawDevelopment2.Olympus:RawDevExposureBiasValue',
      'desc' => [
        'en' => 'Raw Dev Exposure Bias Value',
      ],
    ],
  ];

}
