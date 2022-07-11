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
class ImageRegionRole extends AbstractTagGroup
{

  protected string $id = 'XMP-iptcExt:ImageRegionRole';

  protected string $name = 'ImageRegionRole';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Image Region Role',
  ];

  protected int $count = 0;

  protected int $flags = 320;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::iptcExt
       * line : 409765
       * type : struct
       * writable : true
       * count : 
       * flags : Bag,Flattened,List
       */
      'id' => 'XMP::iptcExt.XMP-iptcExt:ImageRegionRole',
      'desc' => [
        'en' => 'Image Region Role',
      ],
    ],
  ];

}
