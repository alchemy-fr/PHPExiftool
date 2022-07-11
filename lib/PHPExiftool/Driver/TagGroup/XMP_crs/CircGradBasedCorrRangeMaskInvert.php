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
class CircGradBasedCorrRangeMaskInvert extends AbstractTagGroup
{

  protected string $id = 'XMP-crs:CircGradBasedCorrRangeMaskInvert';

  protected string $name = 'CircGradBasedCorrRangeMaskInvert';

  protected ?string $phpType = 'boolean';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Circ Grad Based Corr Range Mask Invert',
  ];

  protected int $count = 0;

  protected int $flags = 64;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::crs
       * line : 402254
       * type : boolean
       * writable : true
       * count : 
       * flags : Flattened,List
       */
      'id' => 'XMP::crs.XMP-crs:CircGradBasedCorrRangeMaskInvert',
      'desc' => [
        'en' => 'Circ Grad Based Corr Range Mask Invert',
      ],
    ],
  ];

}
