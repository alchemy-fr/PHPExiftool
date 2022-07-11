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
class MakerNoteReconyx2 extends AbstractTagGroup
{

  protected string $id = 'ExifIFD:MakerNoteReconyx2';

  protected string $name = 'MakerNoteReconyx2';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Maker Note Reconyx 2',
  ];

  protected int $count = 0;

  protected int $flags = 2;

  protected array $tags = [
    0 => [
      /**
       * table_name : DNG::AdobeData
       * line : 105466
       * type : undef
       * writable : true
       * count : 
       * flags : Binary,Permanent
       */
      'id' => 'DNG::AdobeData.ExifIFD:MakerNoteReconyx2',
      'desc' => [
        'en' => 'Maker Note Reconyx 2',
      ],
    ],
    1 => [
      /**
       * table_name : Exif::Main
       * line : 116427
       * type : undef
       * writable : true
       * count : 
       * flags : Binary
       */
      'id' => 'Exif::Main.ExifIFD:MakerNoteReconyx2',
      'desc' => [
        'en' => 'Maker Note Reconyx 2',
      ],
    ],
  ];

}
