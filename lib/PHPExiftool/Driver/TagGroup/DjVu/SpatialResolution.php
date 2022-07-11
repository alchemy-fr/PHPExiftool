<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\DjVu;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SpatialResolution extends AbstractTagGroup
{

  protected string $id = 'DjVu:SpatialResolution';

  protected string $name = 'SpatialResolution';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Spatial Resolution',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : DjVu::Info
       * line : 107474
       * type : int16u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'DjVu::Info.DjVu:SpatialResolution',
      'desc' => [
        'en' => 'Spatial Resolution',
      ],
    ],
  ];

}
