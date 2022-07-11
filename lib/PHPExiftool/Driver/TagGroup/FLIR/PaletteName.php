<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\FLIR;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PaletteName extends AbstractTagGroup
{

  protected string $id = 'FLIR:PaletteName';

  protected string $name = 'PaletteName';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Palette Name',
  ];

  protected int $count = 32;

  protected array $tags = [
    0 => [
      /**
       * table_name : FLIR::PaletteInfo
       * line : 123884
       * type : string
       * writable : false
       * count : 32
       * flags : 
       */
      'id' => 'FLIR::PaletteInfo.FLIR:PaletteName',
      'desc' => [
        'en' => 'Palette Name',
      ],
    ],
  ];

}
