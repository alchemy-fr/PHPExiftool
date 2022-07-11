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
class GradientBasedCorrRangeMaskSampleType extends AbstractTagGroup
{

  protected string $id = 'XMP-crs:GradientBasedCorrRangeMaskSampleType';

  protected string $name = 'GradientBasedCorrRangeMaskSampleType';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Gradient Based Corr Range Mask Sample Type',
  ];

  protected int $count = 0;

  protected int $flags = 64;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::crs
       * line : 402974
       * type : integer
       * writable : true
       * count : 
       * flags : Flattened,List
       */
      'id' => 'XMP::crs.XMP-crs:GradientBasedCorrRangeMaskSampleType',
      'desc' => [
        'en' => 'Gradient Based Corr Range Mask Sample Type',
      ],
    ],
  ];

}
