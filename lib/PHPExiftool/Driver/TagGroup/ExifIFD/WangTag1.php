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
class WangTag1 extends AbstractTagGroup
{

  protected string $id = 'ExifIFD:WangTag1';

  protected string $name = 'WangTag1';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Wang Tag 1',
  ];

  protected int $count = 0;

  protected int $flags = 2;

  protected array $tags = [
    0 => [
      /**
       * table_name : Exif::Main
       * line : 113202
       * type : ?
       * writable : false
       * count : 
       * flags : Binary
       */
      'id' => 'Exif::Main.ExifIFD:WangTag1',
      'desc' => [
        'en' => 'Wang Tag 1',
      ],
    ],
  ];

}
