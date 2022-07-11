<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\PNG_pHYs;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PixelsPerUnitY extends AbstractTagGroup
{

  protected string $id = 'PNG-pHYs:PixelsPerUnitY';

  protected string $name = 'PixelsPerUnitY';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Pixels Per Unit Y',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : PNG::PhysicalPixel
       * line : 273008
       * type : int32u
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'PNG::PhysicalPixel.PNG-pHYs:PixelsPerUnitY',
      'desc' => [
        'en' => 'Pixels Per Unit Y',
      ],
    ],
  ];

}
