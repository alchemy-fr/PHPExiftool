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
class MakerNoteOlympus3 extends AbstractTagGroup
{

  protected string $id = 'ExifIFD:MakerNoteOlympus3';

  protected string $name = 'MakerNoteOlympus3';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Maker Note Olympus 3',
  ];

  protected int $count = 0;

  protected int $flags = 2;

  protected array $tags = [
    0 => [
      /**
       * table_name : DNG::AdobeData
       * line : 105347
       * type : undef
       * writable : true
       * count : 
       * flags : Binary,Permanent
       */
      'id' => 'DNG::AdobeData.ExifIFD:MakerNoteOlympus3',
      'desc' => [
        'en' => 'Maker Note Olympus 3',
      ],
    ],
    1 => [
      /**
       * table_name : Exif::Main
       * line : 116308
       * type : undef
       * writable : true
       * count : 
       * flags : Binary
       */
      'id' => 'Exif::Main.ExifIFD:MakerNoteOlympus3',
      'desc' => [
        'en' => 'Maker Note Olympus 3',
      ],
    ],
  ];

}
