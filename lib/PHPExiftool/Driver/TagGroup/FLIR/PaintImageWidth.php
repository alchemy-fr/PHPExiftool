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
class PaintImageWidth extends AbstractTagGroup
{

  protected string $id = 'FLIR:PaintImageWidth';

  protected string $name = 'PaintImageWidth';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Paint Image Width',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : FLIR::PaintData
       * line : 123824
       * type : int16u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'FLIR::PaintData.FLIR:PaintImageWidth',
      'desc' => [
        'en' => 'Paint Image Width',
      ],
    ],
  ];

}
