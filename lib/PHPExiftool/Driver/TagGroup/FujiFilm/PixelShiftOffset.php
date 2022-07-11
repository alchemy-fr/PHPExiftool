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
class PixelShiftOffset extends AbstractTagGroup
{

  protected string $id = 'FujiFilm:PixelShiftOffset';

  protected string $name = 'PixelShiftOffset';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Pixel Shift Offset',
  ];

  protected int $count = 2;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : FujiFilm::Main
       * line : 130695
       * type : rational64s
       * writable : true
       * count : 2
       * flags : Permanent
       */
      'id' => 'FujiFilm::Main.FujiFilm:PixelShiftOffset',
      'desc' => [
        'en' => 'Pixel Shift Offset',
      ],
    ],
  ];

}
