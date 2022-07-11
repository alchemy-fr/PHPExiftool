<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\KodakBordersIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class WatermarkType extends AbstractTagGroup
{

  protected string $id = 'KodakBordersIFD:WatermarkType';

  protected string $name = 'WatermarkType';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Watermark Type',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Kodak::Borders
       * line : 154676
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Kodak::Borders.KodakBordersIFD:WatermarkType',
      'desc' => [
        'en' => 'Watermark Type',
      ],
    ],
  ];

}
