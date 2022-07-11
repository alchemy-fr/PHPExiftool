<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\FujiFilm;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RawImageWidth extends AbstractTagGroup
{

  protected string $id = 'FujiFilm:RawImageWidth';

  protected string $name = 'RawImageWidth';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Raw Image Width',
    'fr' => 'Largeur de l\'image brute',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : FujiFilm::RAFData
       * line : 131479
       * type : int32u
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'FujiFilm::RAFData.FujiFilm:RawImageWidth',
      'desc' => [
        'en' => 'Raw Image Width',
        'fr' => 'Largeur de l\'image brute',
      ],
    ],
    1 => [
      /**
       * table_name : FujiFilm::RAFData
       * line : 131487
       * type : int32u
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'FujiFilm::RAFData.FujiFilm:RawImageWidth',
      'desc' => [
        'en' => 'Raw Image Width',
        'fr' => 'Largeur de l\'image brute',
      ],
    ],
    2 => [
      /**
       * table_name : FujiFilm::RAFData
       * line : 131503
       * type : int32u
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'FujiFilm::RAFData.FujiFilm:RawImageWidth',
      'desc' => [
        'en' => 'Raw Image Width',
        'fr' => 'Largeur de l\'image brute',
      ],
    ],
  ];

}
