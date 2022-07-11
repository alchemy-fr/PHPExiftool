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
class ToningSaturation extends AbstractTagGroup
{

  protected string $id = 'Nikon:ToningSaturation';

  protected string $name = 'ToningSaturation';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Toning Saturation',
    'fr' => 'Saturation du virage',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::PictureControl
       * line : 204257
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::PictureControl.Nikon:ToningSaturation',
      'desc' => [
        'en' => 'Toning Saturation',
        'fr' => 'Saturation du virage',
      ],
    ],
    1 => [
      /**
       * table_name : Nikon::PictureControl2
       * line : 204580
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::PictureControl2.Nikon:ToningSaturation',
      'desc' => [
        'en' => 'Toning Saturation',
        'fr' => 'Saturation du virage',
      ],
    ],
    2 => [
      /**
       * table_name : Nikon::PictureControl3
       * line : 204906
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::PictureControl3.Nikon:ToningSaturation',
      'desc' => [
        'en' => 'Toning Saturation',
        'fr' => 'Saturation du virage',
      ],
    ],
  ];

}
