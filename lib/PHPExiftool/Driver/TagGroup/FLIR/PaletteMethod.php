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
class PaletteMethod extends AbstractTagGroup
{

  protected string $id = 'FLIR:PaletteMethod';

  protected string $name = 'PaletteMethod';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Palette Method',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : FLIR::PaletteInfo
       * line : 123875
       * type : int8u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'FLIR::PaletteInfo.FLIR:PaletteMethod',
      'desc' => [
        'en' => 'Palette Method',
      ],
    ],
  ];

}
