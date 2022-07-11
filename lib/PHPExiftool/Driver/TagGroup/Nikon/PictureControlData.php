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
class PictureControlData extends AbstractTagGroup
{

  protected string $id = 'Nikon:PictureControlData';

  protected string $name = 'PictureControlData';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Picture Control Data',
  ];

  protected int $count = 0;

  protected int $flags = 18;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::Main
       * line : 197381
       * type : undef
       * writable : true
       * count : 
       * flags : Binary,Unsafe
       */
      'id' => 'Nikon::Main.Nikon:PictureControlData',
      'desc' => [
        'en' => 'Picture Control Data',
      ],
    ],
    1 => [
      /**
       * table_name : Nikon::Main
       * line : 197385
       * type : undef
       * writable : true
       * count : 
       * flags : Binary,Unsafe
       */
      'id' => 'Nikon::Main.Nikon:PictureControlData',
      'desc' => [
        'en' => 'Picture Control Data',
      ],
    ],
    2 => [
      /**
       * table_name : Nikon::Main
       * line : 197389
       * type : undef
       * writable : true
       * count : 
       * flags : Binary,Unsafe
       */
      'id' => 'Nikon::Main.Nikon:PictureControlData',
      'desc' => [
        'en' => 'Picture Control Data',
      ],
    ],
    3 => [
      /**
       * table_name : Nikon::Main
       * line : 197393
       * type : undef
       * writable : true
       * count : 
       * flags : Binary,Unsafe
       */
      'id' => 'Nikon::Main.Nikon:PictureControlData',
      'desc' => [
        'en' => 'Picture Control Data',
      ],
    ],
    4 => [
      /**
       * table_name : Nikon::Main
       * line : 199907
       * type : undef
       * writable : true
       * count : 
       * flags : Binary,Unsafe
       */
      'id' => 'Nikon::Main.Nikon:PictureControlData',
      'desc' => [
        'en' => 'Picture Control Data',
      ],
    ],
    5 => [
      /**
       * table_name : Nikon::NCTG
       * line : 203668
       * type : undef
       * writable : true
       * count : 
       * flags : Binary,Unsafe
       */
      'id' => 'Nikon::NCTG.Nikon:PictureControlData',
      'desc' => [
        'en' => 'Picture Control Data',
      ],
    ],
    6 => [
      /**
       * table_name : Nikon::NCTG
       * line : 203672
       * type : undef
       * writable : true
       * count : 
       * flags : Binary,Unsafe
       */
      'id' => 'Nikon::NCTG.Nikon:PictureControlData',
      'desc' => [
        'en' => 'Picture Control Data',
      ],
    ],
    7 => [
      /**
       * table_name : Nikon::NCTG
       * line : 203676
       * type : undef
       * writable : true
       * count : 
       * flags : Binary,Unsafe
       */
      'id' => 'Nikon::NCTG.Nikon:PictureControlData',
      'desc' => [
        'en' => 'Picture Control Data',
      ],
    ],
    8 => [
      /**
       * table_name : Nikon::NCTG
       * line : 203680
       * type : undef
       * writable : true
       * count : 
       * flags : Binary,Unsafe
       */
      'id' => 'Nikon::NCTG.Nikon:PictureControlData',
      'desc' => [
        'en' => 'Picture Control Data',
      ],
    ],
  ];

}
