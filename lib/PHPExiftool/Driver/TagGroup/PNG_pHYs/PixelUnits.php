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
class PixelUnits extends AbstractTagGroup
{

  protected string $id = 'PNG-pHYs:PixelUnits';

  protected string $name = 'PixelUnits';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Pixel Units',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : PNG::PhysicalPixel
       * line : 273013
       * type : int8u
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'PNG::PhysicalPixel.PNG-pHYs:PixelUnits',
      'desc' => [
        'en' => 'Pixel Units',
      ],
    ],
  ];

}
