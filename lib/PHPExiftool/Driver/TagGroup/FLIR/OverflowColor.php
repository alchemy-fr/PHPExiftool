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
class OverflowColor extends AbstractTagGroup
{

  protected string $id = 'FLIR:OverflowColor';

  protected string $name = 'OverflowColor';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Overflow Color',
  ];

  protected int $count = 3;

  protected array $tags = [
    0 => [
      /**
       * table_name : FLIR::PaletteInfo
       * line : 123855
       * type : int8u
       * writable : false
       * count : 3
       * flags : 
       */
      'id' => 'FLIR::PaletteInfo.FLIR:OverflowColor',
      'desc' => [
        'en' => 'Overflow Color',
      ],
    ],
  ];

}
