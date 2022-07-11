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
class ToningEffect extends AbstractTagGroup
{

  protected string $id = 'Nikon:ToningEffect';

  protected string $name = 'ToningEffect';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Toning Effect',
    'fr' => 'Virage',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::Main
       * line : 199895
       * type : string
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::Main.Nikon:ToningEffect',
      'desc' => [
        'en' => 'Toning Effect',
        'fr' => 'Virage',
      ],
    ],
    1 => [
      /**
       * table_name : Nikon::PictureControl
       * line : 204168
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::PictureControl.Nikon:ToningEffect',
      'desc' => [
        'en' => 'Toning Effect',
        'fr' => 'Virage',
      ],
    ],
    2 => [
      /**
       * table_name : Nikon::PictureControl2
       * line : 204491
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::PictureControl2.Nikon:ToningEffect',
      'desc' => [
        'en' => 'Toning Effect',
        'fr' => 'Virage',
      ],
    ],
    3 => [
      /**
       * table_name : Nikon::PictureControl3
       * line : 204817
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::PictureControl3.Nikon:ToningEffect',
      'desc' => [
        'en' => 'Toning Effect',
        'fr' => 'Virage',
      ],
    ],
  ];

}
