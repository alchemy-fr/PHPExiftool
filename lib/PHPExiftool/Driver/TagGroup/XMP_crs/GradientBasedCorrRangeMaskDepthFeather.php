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
class GradientBasedCorrRangeMaskDepthFeather extends AbstractTagGroup
{

  protected string $id = 'XMP-crs:GradientBasedCorrRangeMaskDepthFeather';

  protected string $name = 'GradientBasedCorrRangeMaskDepthFeather';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Gradient Based Corr Range Mask Depth Feather',
  ];

  protected int $count = 0;

  protected int $flags = 64;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::crs
       * line : 402947
       * type : real
       * writable : true
       * count : 
       * flags : Flattened,List
       */
      'id' => 'XMP::crs.XMP-crs:GradientBasedCorrRangeMaskDepthFeather',
      'desc' => [
        'en' => 'Gradient Based Corr Range Mask Depth Feather',
      ],
    ],
  ];

}
