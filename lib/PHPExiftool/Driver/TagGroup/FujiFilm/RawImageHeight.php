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
class RawImageHeight extends AbstractTagGroup
{

  protected string $id = 'FujiFilm:RawImageHeight';

  protected string $name = 'RawImageHeight';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Raw Image Height',
    'fr' => 'Hauteur de l\'image brute',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : FujiFilm::RAFData
       * line : 131495
       * type : int32u
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'FujiFilm::RAFData.FujiFilm:RawImageHeight',
      'desc' => [
        'en' => 'Raw Image Height',
        'fr' => 'Hauteur de l\'image brute',
      ],
    ],
    1 => [
      /**
       * table_name : FujiFilm::RAFData
       * line : 131511
       * type : int32u
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'FujiFilm::RAFData.FujiFilm:RawImageHeight',
      'desc' => [
        'en' => 'Raw Image Height',
        'fr' => 'Hauteur de l\'image brute',
      ],
    ],
    2 => [
      /**
       * table_name : FujiFilm::RAFData
       * line : 131519
       * type : int32u
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'FujiFilm::RAFData.FujiFilm:RawImageHeight',
      'desc' => [
        'en' => 'Raw Image Height',
        'fr' => 'Hauteur de l\'image brute',
      ],
    ],
  ];

}
