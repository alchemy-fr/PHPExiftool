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
class MaskGroupBasedCorrRangeMaskLuminanceDepthSampleInfo extends AbstractTagGroup
{

  protected string $id = 'XMP-crs:MaskGroupBasedCorrRangeMaskLuminanceDepthSampleInfo';

  protected string $name = 'MaskGroupBasedCorrRangeMaskLuminanceDepthSampleInfo';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Mask Group Based Corr Range Mask Luminance Depth Sample Info',
  ];

  protected int $count = 0;

  protected int $flags = 64;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::crs
       * line : 403635
       * type : string
       * writable : true
       * count : 
       * flags : Flattened,List
       */
      'id' => 'XMP::crs.XMP-crs:MaskGroupBasedCorrRangeMaskLuminanceDepthSampleInfo',
      'desc' => [
        'en' => 'Mask Group Based Corr Range Mask Luminance Depth Sample Info',
      ],
    ],
  ];

}
