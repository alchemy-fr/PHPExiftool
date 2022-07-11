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
class ExpandFilterLens extends AbstractTagGroup
{

  protected string $id = 'ExifIFD:ExpandFilterLens';

  protected string $name = 'ExpandFilterLens';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Expand Filter Lens',
    'fr' => 'Extension lentille filtre',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Exif::Main
       * line : 118367
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Exif::Main.ExifIFD:ExpandFilterLens',
      'desc' => [
        'en' => 'Expand Filter Lens',
        'fr' => 'Extension lentille filtre',
      ],
    ],
  ];

}
