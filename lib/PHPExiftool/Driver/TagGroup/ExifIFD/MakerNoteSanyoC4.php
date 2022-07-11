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
class MakerNoteSanyoC4 extends AbstractTagGroup
{

  protected string $id = 'ExifIFD:MakerNoteSanyoC4';

  protected string $name = 'MakerNoteSanyoC4';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Maker Note Sanyo C4',
  ];

  protected int $count = 0;

  protected int $flags = 2;

  protected array $tags = [
    0 => [
      /**
       * table_name : DNG::AdobeData
       * line : 105518
       * type : undef
       * writable : true
       * count : 
       * flags : Binary,Permanent
       */
      'id' => 'DNG::AdobeData.ExifIFD:MakerNoteSanyoC4',
      'desc' => [
        'en' => 'Maker Note Sanyo C4',
      ],
    ],
    1 => [
      /**
       * table_name : Exif::Main
       * line : 116479
       * type : undef
       * writable : true
       * count : 
       * flags : Binary
       */
      'id' => 'Exif::Main.ExifIFD:MakerNoteSanyoC4',
      'desc' => [
        'en' => 'Maker Note Sanyo C4',
      ],
    ],
  ];

}
