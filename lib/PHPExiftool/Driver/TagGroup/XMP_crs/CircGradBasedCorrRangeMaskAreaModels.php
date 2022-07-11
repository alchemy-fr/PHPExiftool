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
class CircGradBasedCorrRangeMaskAreaModels extends AbstractTagGroup
{

  protected string $id = 'XMP-crs:CircGradBasedCorrRangeMaskAreaModels';

  protected string $name = 'CircGradBasedCorrRangeMaskAreaModels';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Circ Grad Based Corr Range Mask Area Models',
  ];

  protected int $count = 0;

  protected int $flags = 576;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::crs
       * line : 402233
       * type : struct
       * writable : true
       * count : 
       * flags : Flattened,List,Seq
       */
      'id' => 'XMP::crs.XMP-crs:CircGradBasedCorrRangeMaskAreaModels',
      'desc' => [
        'en' => 'Circ Grad Based Corr Range Mask Area Models',
      ],
    ],
  ];

}
