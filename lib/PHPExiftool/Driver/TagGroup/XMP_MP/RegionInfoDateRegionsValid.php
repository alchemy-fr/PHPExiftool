<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_MP;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RegionInfoDateRegionsValid extends AbstractTagGroup
{

  protected string $id = 'XMP-MP:RegionInfoDateRegionsValid';

  protected string $name = 'RegionInfoDateRegionsValid';

  protected ?string $phpType = 'date';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Region Info Date Regions Valid',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Microsoft::MP
       * line : 174411
       * type : date
       * writable : true
       * count : 
       * flags : Flattened
       */
      'id' => 'Microsoft::MP.XMP-MP:RegionInfoDateRegionsValid',
      'desc' => [
        'en' => 'Region Info Date Regions Valid',
      ],
    ],
  ];

}
