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
class ImageRegionBoundaryVerticesY extends AbstractTagGroup
{

  protected string $id = 'XMP-iptcExt:ImageRegionBoundaryVerticesY';

  protected string $name = 'ImageRegionBoundaryVerticesY';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Image Region Boundary Vertices Y',
  ];

  protected int $count = 0;

  protected int $flags = 64;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::iptcExt
       * line : 409750
       * type : real
       * writable : true
       * count : 
       * flags : Flattened,List
       */
      'id' => 'XMP::iptcExt.XMP-iptcExt:ImageRegionBoundaryVerticesY',
      'desc' => [
        'en' => 'Image Region Boundary Vertices Y',
      ],
    ],
  ];

}
