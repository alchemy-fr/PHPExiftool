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
class AFAreaWidth extends AbstractTagGroup
{

  protected string $id = 'Nikon:AFAreaWidth';

  protected string $name = 'AFAreaWidth';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'AF Area Width',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::AFInfo2
       * line : 190307
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::AFInfo2.Nikon:AFAreaWidth',
      'desc' => [
        'en' => 'AF Area Width',
      ],
    ],
    1 => [
      /**
       * table_name : Nikon::AFInfo2
       * line : 190380
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::AFInfo2.Nikon:AFAreaWidth',
      'desc' => [
        'en' => 'AF Area Width',
      ],
    ],
    2 => [
      /**
       * table_name : Nikon::AFInfo2
       * line : 191330
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::AFInfo2.Nikon:AFAreaWidth',
      'desc' => [
        'en' => 'AF Area Width',
      ],
    ],
    3 => [
      /**
       * table_name : Nikon::AFInfo2V0400
       * line : 191387
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::AFInfo2V0400.Nikon:AFAreaWidth',
      'desc' => [
        'en' => 'AF Area Width',
      ],
    ],
  ];

}
