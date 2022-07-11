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
class PaletteColors extends AbstractTagGroup
{

  protected string $id = 'FLIR:PaletteColors';

  protected string $name = 'PaletteColors';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Palette Colors',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : FLIR::PaletteInfo
       * line : 123840
       * type : int8u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'FLIR::PaletteInfo.FLIR:PaletteColors',
      'desc' => [
        'en' => 'Palette Colors',
      ],
    ],
  ];

}
