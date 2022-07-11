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
class WhiteBalance extends AbstractTagGroup
{

  protected string $id = 'ExifIFD:WhiteBalance';

  protected string $name = 'WhiteBalance';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'White Balance',
    'fr' => 'Balance des blancs',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Exif::Main
       * line : 117573
       * type : int16u
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'Exif::Main.ExifIFD:WhiteBalance',
      'desc' => [
        'en' => 'White Balance',
        'fr' => 'Balance des blancs',
      ],
    ],
    1 => [
      /**
       * table_name : Exif::Main
       * line : 121197
       * type : string
       * writable : true
       * count : 
       * flags : Avoid
       */
      'id' => 'Exif::Main.ExifIFD:WhiteBalance',
      'desc' => [
        'en' => 'White Balance',
        'fr' => 'Balance des blancs',
      ],
    ],
  ];

}
