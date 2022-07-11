<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\FujiIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RawImageFullWidth extends AbstractTagGroup
{

  protected string $id = 'FujiIFD:RawImageFullWidth';

  protected string $name = 'RawImageFullWidth';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Raw Image Full Width',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : FujiFilm::IFD
       * line : 128990
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'FujiFilm::IFD.FujiIFD:RawImageFullWidth',
      'desc' => [
        'en' => 'Raw Image Full Width',
      ],
    ],
  ];

}
