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
class UnderflowColor extends AbstractTagGroup
{

  protected string $id = 'FLIR:UnderflowColor';

  protected string $name = 'UnderflowColor';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Underflow Color',
  ];

  protected int $count = 3;

  protected array $tags = [
    0 => [
      /**
       * table_name : FLIR::PaletteInfo
       * line : 123860
       * type : int8u
       * writable : false
       * count : 3
       * flags : 
       */
      'id' => 'FLIR::PaletteInfo.FLIR:UnderflowColor',
      'desc' => [
        'en' => 'Underflow Color',
      ],
    ],
  ];

}
