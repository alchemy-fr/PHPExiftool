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
class Lens extends AbstractTagGroup
{

  protected string $id = 'ExifIFD:Lens';

  protected string $name = 'Lens';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Lens',
    'fr' => 'Objectif',
  ];

  protected int $count = 0;

  protected int $flags = 1;

  protected array $tags = [
    0 => [
      /**
       * table_name : Exif::Main
       * line : 121165
       * type : string
       * writable : true
       * count : 
       * flags : Avoid
       */
      'id' => 'Exif::Main.ExifIFD:Lens',
      'desc' => [
        'en' => 'Lens',
        'fr' => 'Objectif',
      ],
    ],
  ];

}
