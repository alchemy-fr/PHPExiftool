<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_iptcExt;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RatingRegionLocationId extends AbstractTagGroup
{

  protected string $id = 'XMP-iptcExt:RatingRegionLocationId';

  protected string $name = 'RatingRegionLocationId';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Rating Region Location Id',
  ];

  protected int $count = 0;

  protected int $flags = 320;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::iptcExt
       * line : 410000
       * type : string
       * writable : true
       * count : 
       * flags : Bag,Flattened,List
       */
      'id' => 'XMP::iptcExt.XMP-iptcExt:RatingRegionLocationId',
      'desc' => [
        'en' => 'Rating Region Location Id',
      ],
    ],
  ];

}
