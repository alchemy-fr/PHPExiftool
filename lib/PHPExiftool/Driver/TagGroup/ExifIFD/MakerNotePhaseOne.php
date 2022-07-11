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
class MakerNotePhaseOne extends AbstractTagGroup
{

  protected string $id = 'ExifIFD:MakerNotePhaseOne';

  protected string $name = 'MakerNotePhaseOne';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Maker Note Phase One',
  ];

  protected int $count = 0;

  protected int $flags = 2;

  protected array $tags = [
    0 => [
      /**
       * table_name : DNG::AdobeData
       * line : 105454
       * type : undef
       * writable : true
       * count : 
       * flags : Binary,Permanent
       */
      'id' => 'DNG::AdobeData.ExifIFD:MakerNotePhaseOne',
      'desc' => [
        'en' => 'Maker Note Phase One',
      ],
    ],
    1 => [
      /**
       * table_name : Exif::Main
       * line : 116415
       * type : undef
       * writable : true
       * count : 
       * flags : Binary
       */
      'id' => 'Exif::Main.ExifIFD:MakerNotePhaseOne',
      'desc' => [
        'en' => 'Maker Note Phase One',
      ],
    ],
  ];

}
