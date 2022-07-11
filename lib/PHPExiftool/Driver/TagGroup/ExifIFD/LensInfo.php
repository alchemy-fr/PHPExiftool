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
class LensInfo extends AbstractTagGroup
{

  protected string $id = 'ExifIFD:LensInfo';

  protected string $name = 'LensInfo';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Lens Info',
    'fr' => 'Informations sur l\'objectif',
  ];

  protected int $count = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Exif::Main
       * line : 118232
       * type : rational64u
       * writable : true
       * count : 4
       * flags : 
       */
      'id' => 'Exif::Main.ExifIFD:LensInfo',
      'desc' => [
        'en' => 'Lens Info',
        'fr' => 'Informations sur l\'objectif',
      ],
    ],
  ];

}
