<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Panasonic;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class TextStamp extends AbstractTagGroup
{

  protected string $id = 'Panasonic:TextStamp';

  protected string $name = 'TextStamp';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Text Stamp',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Panasonic::Main
       * line : 277164
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Panasonic::Main.Panasonic:TextStamp',
      'desc' => [
        'en' => 'Text Stamp',
      ],
    ],
    1 => [
      /**
       * table_name : Panasonic::Main
       * line : 277217
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Panasonic::Main.Panasonic:TextStamp',
      'desc' => [
        'en' => 'Text Stamp',
      ],
    ],
    2 => [
      /**
       * table_name : Panasonic::Main
       * line : 278958
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Panasonic::Main.Panasonic:TextStamp',
      'desc' => [
        'en' => 'Text Stamp',
      ],
    ],
    3 => [
      /**
       * table_name : Panasonic::Main
       * line : 278983
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Panasonic::Main.Panasonic:TextStamp',
      'desc' => [
        'en' => 'Text Stamp',
      ],
    ],
  ];

}
