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
class GradientBasedCorrRangeMaskLumMin extends AbstractTagGroup
{

  protected string $id = 'XMP-crs:GradientBasedCorrRangeMaskLumMin';

  protected string $name = 'GradientBasedCorrRangeMaskLumMin';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Gradient Based Corr Range Mask Lum Min',
  ];

  protected int $count = 0;

  protected int $flags = 64;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::crs
       * line : 402968
       * type : real
       * writable : true
       * count : 
       * flags : Flattened,List
       */
      'id' => 'XMP::crs.XMP-crs:GradientBasedCorrRangeMaskLumMin',
      'desc' => [
        'en' => 'Gradient Based Corr Range Mask Lum Min',
      ],
    ],
  ];

}
