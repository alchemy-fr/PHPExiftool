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
class GradientBasedCorrMaskMasksOrigin extends AbstractTagGroup
{

  protected string $id = 'XMP-crs:GradientBasedCorrMaskMasksOrigin';

  protected string $name = 'GradientBasedCorrMaskMasksOrigin';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Gradient Based Corr Mask Masks Origin',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::crs
       * line : 402818
       * type : string
       * writable : true
       * count : 
       * flags : Flattened
       */
      'id' => 'XMP::crs.XMP-crs:GradientBasedCorrMaskMasksOrigin',
      'desc' => [
        'en' => 'Gradient Based Corr Mask Masks Origin',
      ],
    ],
  ];

}
