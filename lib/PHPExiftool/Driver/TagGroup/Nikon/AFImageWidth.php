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
class AFImageWidth extends AbstractTagGroup
{

  protected string $id = 'Nikon:AFImageWidth';

  protected string $name = 'AFImageWidth';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'AF Image Width',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::AFInfo2
       * line : 190285
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::AFInfo2.Nikon:AFImageWidth',
      'desc' => [
        'en' => 'AF Image Width',
      ],
    ],
    1 => [
      /**
       * table_name : Nikon::AFInfo2
       * line : 190341
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::AFInfo2.Nikon:AFImageWidth',
      'desc' => [
        'en' => 'AF Image Width',
      ],
    ],
    2 => [
      /**
       * table_name : Nikon::AFInfo2
       * line : 191308
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::AFInfo2.Nikon:AFImageWidth',
      'desc' => [
        'en' => 'AF Image Width',
      ],
    ],
    3 => [
      /**
       * table_name : Nikon::AFInfo2V0400
       * line : 191367
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::AFInfo2V0400.Nikon:AFImageWidth',
      'desc' => [
        'en' => 'AF Image Width',
      ],
    ],
  ];

}
