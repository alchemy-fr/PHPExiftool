<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_crd;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PaintCorrectionMaskMasksMaskDigest extends AbstractTagGroup
{

  protected string $id = 'XMP-crd:PaintCorrectionMaskMasksMaskDigest';

  protected string $name = 'PaintCorrectionMaskMasksMaskDigest';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Paint Correction Mask Masks Mask Digest',
  ];

  protected int $count = 0;

  protected int $flags = 1;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::crd
       * line : 400622
       * type : string
       * writable : true
       * count : 
       * flags : Avoid,Flattened
       */
      'id' => 'XMP::crd.XMP-crd:PaintCorrectionMaskMasksMaskDigest',
      'desc' => [
        'en' => 'Paint Correction Mask Masks Mask Digest',
      ],
    ],
  ];

}
