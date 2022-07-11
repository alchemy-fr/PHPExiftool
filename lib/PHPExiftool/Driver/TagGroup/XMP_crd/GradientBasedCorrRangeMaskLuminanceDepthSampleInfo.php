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
class GradientBasedCorrRangeMaskLuminanceDepthSampleInfo extends AbstractTagGroup
{

  protected string $id = 'XMP-crd:GradientBasedCorrRangeMaskLuminanceDepthSampleInfo';

  protected string $name = 'GradientBasedCorrRangeMaskLuminanceDepthSampleInfo';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Gradient Based Corr Range Mask Luminance Depth Sample Info',
  ];

  protected int $count = 0;

  protected int $flags = 65;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::crd
       * line : 399643
       * type : string
       * writable : true
       * count : 
       * flags : Avoid,Flattened,List
       */
      'id' => 'XMP::crd.XMP-crd:GradientBasedCorrRangeMaskLuminanceDepthSampleInfo',
      'desc' => [
        'en' => 'Gradient Based Corr Range Mask Luminance Depth Sample Info',
      ],
    ],
  ];

}
