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
class OffsetSchema extends AbstractTagGroup
{

  protected string $id = 'ExifIFD:OffsetSchema';

  protected string $name = 'OffsetSchema';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Offset Schema',
    'fr' => 'Schéma de décalage',
  ];

  protected int $count = 0;

  protected int $flags = 16;

  protected array $tags = [
    0 => [
      /**
       * table_name : Exif::Main
       * line : 121126
       * type : int32s
       * writable : true
       * count : 
       * flags : Unsafe
       */
      'id' => 'Exif::Main.ExifIFD:OffsetSchema',
      'desc' => [
        'en' => 'Offset Schema',
        'fr' => 'Schéma de décalage',
      ],
    ],
  ];

}
