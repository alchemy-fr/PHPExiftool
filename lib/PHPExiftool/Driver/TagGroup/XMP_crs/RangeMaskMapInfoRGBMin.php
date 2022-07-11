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
class RangeMaskMapInfoRGBMin extends AbstractTagGroup
{

  protected string $id = 'XMP-crs:RangeMaskMapInfoRGBMin';

  protected string $name = 'RangeMaskMapInfoRGBMin';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Range Mask Map Info RGB Min',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::crs
       * line : 404292
       * type : string
       * writable : true
       * count : 
       * flags : Flattened
       */
      'id' => 'XMP::crs.XMP-crs:RangeMaskMapInfoRGBMin',
      'desc' => [
        'en' => 'Range Mask Map Info RGB Min',
      ],
    ],
  ];

}
