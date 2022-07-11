<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class NikonMeteringMode extends AbstractTagGroup
{

  protected string $id = 'Nikon:NikonMeteringMode';

  protected string $name = 'NikonMeteringMode';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Nikon Metering Mode',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::MenuSettingsZ7II
       * line : 200148
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::MenuSettingsZ7II.Nikon:NikonMeteringMode',
      'desc' => [
        'en' => 'Nikon Metering Mode',
      ],
    ],
    1 => [
      /**
       * table_name : Nikon::ShotInfoD500
       * line : 208101
       * type : ?
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfoD500.Nikon:NikonMeteringMode',
      'desc' => [
        'en' => 'Nikon Metering Mode',
      ],
    ],
    2 => [
      /**
       * table_name : Nikon::ShotInfoD810
       * line : 209219
       * type : ?
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfoD810.Nikon:NikonMeteringMode',
      'desc' => [
        'en' => 'Nikon Metering Mode',
      ],
    ],
  ];

}
