<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\IFD0;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Artist extends AbstractTagGroup
{

  protected string $id = 'IFD0:Artist';

  protected string $name = 'Artist';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Artist',
    'fr' => 'Artiste',
  ];

  protected int $count = 0;

  protected int $flags = 64;

  protected array $tags = [
    0 => [
      /**
       * table_name : Exif::Main
       * line : 111732
       * type : string
       * writable : true
       * count : 
       * flags : List
       */
      'id' => 'Exif::Main.IFD0:Artist',
      'desc' => [
        'en' => 'Artist',
        'fr' => 'Artiste',
      ],
    ],
  ];

}
