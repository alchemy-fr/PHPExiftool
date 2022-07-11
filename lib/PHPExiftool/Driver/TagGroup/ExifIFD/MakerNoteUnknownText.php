<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\ExifIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MakerNoteUnknownText extends AbstractTagGroup
{

  protected string $id = 'ExifIFD:MakerNoteUnknownText';

  protected string $name = 'MakerNoteUnknownText';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Maker Note Unknown Text',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : DNG::AdobeData
       * line : 105577
       * type : undef
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'DNG::AdobeData.ExifIFD:MakerNoteUnknownText',
      'desc' => [
        'en' => 'Maker Note Unknown Text',
      ],
    ],
    1 => [
      /**
       * table_name : Exif::Main
       * line : 116538
       * type : undef
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'Exif::Main.ExifIFD:MakerNoteUnknownText',
      'desc' => [
        'en' => 'Maker Note Unknown Text',
      ],
    ],
  ];

}
