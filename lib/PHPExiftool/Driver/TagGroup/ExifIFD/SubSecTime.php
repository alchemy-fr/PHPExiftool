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
class SubSecTime extends AbstractTagGroup
{

  protected string $id = 'ExifIFD:SubSecTime';

  protected string $name = 'SubSecTime';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Sub Sec Time',
    'fr' => 'Fractions de seconde de DateTime',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Exif::Main
       * line : 116573
       * type : string
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'Exif::Main.ExifIFD:SubSecTime',
      'desc' => [
        'en' => 'Sub Sec Time',
        'fr' => 'Fractions de seconde de DateTime',
      ],
    ],
  ];

}
