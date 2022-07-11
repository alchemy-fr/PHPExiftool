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
class Brightness extends AbstractTagGroup
{

  protected string $id = 'Nikon:Brightness';

  protected string $name = 'Brightness';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Brightness',
    'fr' => 'Luminosité',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::PictureControl
       * line : 204060
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::PictureControl.Nikon:Brightness',
      'desc' => [
        'en' => 'Brightness',
        'fr' => 'Luminosité',
      ],
    ],
    1 => [
      /**
       * table_name : Nikon::PictureControl2
       * line : 204374
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::PictureControl2.Nikon:Brightness',
      'desc' => [
        'en' => 'Brightness',
        'fr' => 'Luminosité',
      ],
    ],
    2 => [
      /**
       * table_name : Nikon::PictureControl3
       * line : 204700
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::PictureControl3.Nikon:Brightness',
      'desc' => [
        'en' => 'Brightness',
        'fr' => 'Luminosité',
      ],
    ],
  ];

}
