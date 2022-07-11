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
class SamsungRawUnknown extends AbstractTagGroup
{

  protected string $id = 'ExifIFD:SamsungRawUnknown';

  protected string $name = 'SamsungRawUnknown';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Samsung Raw Unknown',
  ];

  protected int $count = 0;

  protected int $flags = 32;

  protected array $tags = [
    0 => [
      /**
       * table_name : Exif::Main
       * line : 116886
       * type : ?
       * writable : false
       * count : 
       * flags : Unknown
       */
      'id' => 'Exif::Main.ExifIFD:SamsungRawUnknown',
      'desc' => [
        'en' => 'Samsung Raw Unknown',
      ],
    ],
  ];

}
