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
class OwnerName extends AbstractTagGroup
{

  protected string $id = 'ExifIFD:OwnerName';

  protected string $name = 'OwnerName';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Owner Name',
    'fr' => 'Nom du propriétaire',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Exif::Main
       * line : 118203
       * type : string
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'Exif::Main.ExifIFD:OwnerName',
      'desc' => [
        'en' => 'Owner Name',
        'fr' => 'Nom du propriétaire',
      ],
    ],
    1 => [
      /**
       * table_name : Exif::Main
       * line : 121136
       * type : string
       * writable : true
       * count : 
       * flags : Avoid
       */
      'id' => 'Exif::Main.ExifIFD:OwnerName',
      'desc' => [
        'en' => 'Owner Name',
        'fr' => 'Nom du propriétaire',
      ],
    ],
  ];

}
