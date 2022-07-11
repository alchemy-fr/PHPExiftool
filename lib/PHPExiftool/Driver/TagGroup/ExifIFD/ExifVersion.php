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
class ExifVersion extends AbstractTagGroup
{

  protected string $id = 'ExifIFD:ExifVersion';

  protected string $name = 'ExifVersion';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Exif Version',
    'fr' => 'Version Exif',
  ];

  protected int $count = 0;

  protected int $flags = 128;

  protected array $tags = [
    0 => [
      /**
       * table_name : Exif::Main
       * line : 114343
       * type : undef
       * writable : true
       * count : 
       * flags : Mandatory
       */
      'id' => 'Exif::Main.ExifIFD:ExifVersion',
      'desc' => [
        'en' => 'Exif Version',
        'fr' => 'Version Exif',
      ],
    ],
  ];

}
