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
class PaintCorrectionMaskBottom extends AbstractTagGroup
{

  protected string $id = 'XMP-crd:PaintCorrectionMaskBottom';

  protected string $name = 'PaintCorrectionMaskBottom';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Paint Correction Mask Bottom',
  ];

  protected int $count = 0;

  protected int $flags = 1;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::crd
       * line : 400475
       * type : real
       * writable : true
       * count : 
       * flags : Avoid,Flattened
       */
      'id' => 'XMP::crd.XMP-crd:PaintCorrectionMaskBottom',
      'desc' => [
        'en' => 'Paint Correction Mask Bottom',
      ],
    ],
  ];

}
