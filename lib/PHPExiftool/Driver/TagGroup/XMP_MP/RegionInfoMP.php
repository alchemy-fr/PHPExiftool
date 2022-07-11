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
class RegionInfoMP extends AbstractTagGroup
{

  protected string $id = 'XMP-MP:RegionInfoMP';

  protected string $name = 'RegionInfoMP';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Region Info MP',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Microsoft::MP
       * line : 174407
       * type : struct
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'Microsoft::MP.XMP-MP:RegionInfoMP',
      'desc' => [
        'en' => 'Region Info MP',
      ],
    ],
  ];

}
