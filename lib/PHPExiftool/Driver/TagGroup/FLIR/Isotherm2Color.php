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
class Isotherm2Color extends AbstractTagGroup
{

  protected string $id = 'FLIR:Isotherm2Color';

  protected string $name = 'Isotherm2Color';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Isotherm 2 Color',
  ];

  protected int $count = 3;

  protected array $tags = [
    0 => [
      /**
       * table_name : FLIR::PaletteInfo
       * line : 123870
       * type : int8u
       * writable : false
       * count : 3
       * flags : 
       */
      'id' => 'FLIR::PaletteInfo.FLIR:Isotherm2Color',
      'desc' => [
        'en' => 'Isotherm 2 Color',
      ],
    ],
  ];

}
