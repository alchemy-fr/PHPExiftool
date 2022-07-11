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
class PaintCorrectionMaskRangeAreaModelsComponents extends AbstractTagGroup
{

  protected string $id = 'XMP-crd:PaintCorrectionMaskRangeAreaModelsComponents';

  protected string $name = 'PaintCorrectionMaskRangeAreaModelsComponents';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Paint Correction Mask Range Area Models Components',
  ];

  protected int $count = 0;

  protected int $flags = 577;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::crd
       * line : 400490
       * type : string
       * writable : true
       * count : 
       * flags : Avoid,Flattened,List,Seq
       */
      'id' => 'XMP::crd.XMP-crd:PaintCorrectionMaskRangeAreaModelsComponents',
      'desc' => [
        'en' => 'Paint Correction Mask Range Area Models Components',
      ],
    ],
  ];

}
