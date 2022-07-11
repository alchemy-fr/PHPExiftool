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
class SupportsNormalDynamicRange extends AbstractTagGroup
{

  protected string $id = 'XMP-crs:SupportsNormalDynamicRange';

  protected string $name = 'SupportsNormalDynamicRange';

  protected ?string $phpType = 'boolean';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Supports Normal Dynamic Range',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::crs
       * line : 404764
       * type : boolean
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'XMP::crs.XMP-crs:SupportsNormalDynamicRange',
      'desc' => [
        'en' => 'Supports Normal Dynamic Range',
      ],
    ],
  ];

}
