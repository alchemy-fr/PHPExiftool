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
class ImageRegionBoundaryVertices extends AbstractTagGroup
{

  protected string $id = 'XMP-iptcExt:ImageRegionBoundaryVertices';

  protected string $name = 'ImageRegionBoundaryVertices';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Image Region Boundary Vertices',
  ];

  protected int $count = 0;

  protected int $flags = 576;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::iptcExt
       * line : 409744
       * type : struct
       * writable : true
       * count : 
       * flags : Flattened,List,Seq
       */
      'id' => 'XMP::iptcExt.XMP-iptcExt:ImageRegionBoundaryVertices',
      'desc' => [
        'en' => 'Image Region Boundary Vertices',
      ],
    ],
  ];

}
