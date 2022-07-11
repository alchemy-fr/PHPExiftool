<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_crs;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SupportsHighDynamicRange extends AbstractTagGroup
{

  protected string $id = 'XMP-crs:SupportsHighDynamicRange';

  protected string $name = 'SupportsHighDynamicRange';

  protected ?string $phpType = 'boolean';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Supports High Dynamic Range',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::crs
       * line : 404758
       * type : boolean
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'XMP::crs.XMP-crs:SupportsHighDynamicRange',
      'desc' => [
        'en' => 'Supports High Dynamic Range',
      ],
    ],
  ];

}
