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
class GradientBasedCorrRangeMaskLuminanceDepthSampleInfo extends AbstractTagGroup
{

  protected string $id = 'XMP-crs:GradientBasedCorrRangeMaskLuminanceDepthSampleInfo';

  protected string $name = 'GradientBasedCorrRangeMaskLuminanceDepthSampleInfo';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Gradient Based Corr Range Mask Luminance Depth Sample Info',
  ];

  protected int $count = 0;

  protected int $flags = 64;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::crs
       * line : 402962
       * type : string
       * writable : true
       * count : 
       * flags : Flattened,List
       */
      'id' => 'XMP::crs.XMP-crs:GradientBasedCorrRangeMaskLuminanceDepthSampleInfo',
      'desc' => [
        'en' => 'Gradient Based Corr Range Mask Luminance Depth Sample Info',
      ],
    ],
  ];

}
