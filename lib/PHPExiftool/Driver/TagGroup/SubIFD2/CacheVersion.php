<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\SubIFD2;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CacheVersion extends AbstractTagGroup
{

  protected string $id = 'SubIFD2:CacheVersion';

  protected string $name = 'CacheVersion';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Cache Version',
  ];

  protected int $count = 4;

  protected int $flags = 16;

  protected array $tags = [
    0 => [
      /**
       * table_name : Exif::Main
       * line : 120948
       * type : int32u
       * writable : true
       * count : 4
       * flags : Unsafe
       */
      'id' => 'Exif::Main.SubIFD2:CacheVersion',
      'desc' => [
        'en' => 'Cache Version',
      ],
    ],
  ];

}
