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
class RawDevContrastValue extends AbstractTagGroup
{

  protected string $id = 'Olympus:RawDevContrastValue';

  protected string $name = 'RawDevContrastValue';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Raw Dev Contrast Value',
  ];

  protected int $count = 3;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Olympus::RawDevelopment
       * line : 260601
       * type : int16s
       * writable : true
       * count : 3
       * flags : Permanent
       */
      'id' => 'Olympus::RawDevelopment.Olympus:RawDevContrastValue',
      'desc' => [
        'en' => 'Raw Dev Contrast Value',
      ],
    ],
    1 => [
      /**
       * table_name : Olympus::RawDevelopment2
       * line : 260797
       * type : int16s
       * writable : true
       * count : 3
       * flags : Permanent
       */
      'id' => 'Olympus::RawDevelopment2.Olympus:RawDevContrastValue',
      'desc' => [
        'en' => 'Raw Dev Contrast Value',
      ],
    ],
  ];

}
