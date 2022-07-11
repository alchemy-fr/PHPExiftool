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
class MakerNoteReconyx3 extends AbstractTagGroup
{

  protected string $id = 'ExifIFD:MakerNoteReconyx3';

  protected string $name = 'MakerNoteReconyx3';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Maker Note Reconyx 3',
  ];

  protected int $count = 0;

  protected int $flags = 2;

  protected array $tags = [
    0 => [
      /**
       * table_name : DNG::AdobeData
       * line : 105470
       * type : undef
       * writable : true
       * count : 
       * flags : Binary,Permanent
       */
      'id' => 'DNG::AdobeData.ExifIFD:MakerNoteReconyx3',
      'desc' => [
        'en' => 'Maker Note Reconyx 3',
      ],
    ],
    1 => [
      /**
       * table_name : Exif::Main
       * line : 116431
       * type : undef
       * writable : true
       * count : 
       * flags : Binary
       */
      'id' => 'Exif::Main.ExifIFD:MakerNoteReconyx3',
      'desc' => [
        'en' => 'Maker Note Reconyx 3',
      ],
    ],
  ];

}
