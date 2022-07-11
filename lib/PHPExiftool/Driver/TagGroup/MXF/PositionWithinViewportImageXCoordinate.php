<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MXF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PositionWithinViewportImageXCoordinate extends AbstractTagGroup
{

  protected string $id = 'MXF:PositionWithinViewportImageXCoordinate';

  protected string $name = 'PositionWithinViewportImageXCoordinate';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Position Within Viewport Image X Coordinate',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 168669
       * type : int16s
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:PositionWithinViewportImageXCoordinate',
      'desc' => [
        'en' => 'Position Within Viewport Image X Coordinate',
      ],
    ],
  ];

}
