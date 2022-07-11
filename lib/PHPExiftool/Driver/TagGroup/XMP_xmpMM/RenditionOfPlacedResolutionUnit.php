<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_xmpMM;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RenditionOfPlacedResolutionUnit extends AbstractTagGroup
{

  protected string $id = 'XMP-xmpMM:RenditionOfPlacedResolutionUnit';

  protected string $name = 'RenditionOfPlacedResolutionUnit';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Rendition Of Placed Resolution Unit',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::xmpMM
       * line : 414601
       * type : string
       * writable : true
       * count : 
       * flags : Flattened
       */
      'id' => 'XMP::xmpMM.XMP-xmpMM:RenditionOfPlacedResolutionUnit',
      'desc' => [
        'en' => 'Rendition Of Placed Resolution Unit',
      ],
    ],
  ];

}
