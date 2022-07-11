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
class ManifestReferencePlacedResolutionUnit extends AbstractTagGroup
{

  protected string $id = 'XMP-xmpMM:ManifestReferencePlacedResolutionUnit';

  protected string $name = 'ManifestReferencePlacedResolutionUnit';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Manifest Reference Placed Resolution Unit',
  ];

  protected int $count = 0;

  protected int $flags = 64;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::xmpMM
       * line : 414504
       * type : string
       * writable : true
       * count : 
       * flags : Flattened,List
       */
      'id' => 'XMP::xmpMM.XMP-xmpMM:ManifestReferencePlacedResolutionUnit',
      'desc' => [
        'en' => 'Manifest Reference Placed Resolution Unit',
      ],
    ],
  ];

}
