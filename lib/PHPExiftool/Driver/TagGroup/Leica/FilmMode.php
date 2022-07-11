<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Leica;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FilmMode extends AbstractTagGroup
{

  protected string $id = 'Leica:FilmMode';

  protected string $name = 'FilmMode';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Film Mode',
    'fr' => 'Mode Film',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Panasonic::Leica5
       * line : 275229
       * type : string
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Panasonic::Leica5.Leica:FilmMode',
      'desc' => [
        'en' => 'Film Mode',
        'fr' => 'Mode Film',
      ],
    ],
  ];

}
