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
class GradientBasedCorrRangeMaskAreaModels extends AbstractTagGroup
{

  protected string $id = 'XMP-crd:GradientBasedCorrRangeMaskAreaModels';

  protected string $name = 'GradientBasedCorrRangeMaskAreaModels';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Gradient Based Corr Range Mask Area Models',
  ];

  protected int $count = 0;

  protected int $flags = 577;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::crd
       * line : 399616
       * type : struct
       * writable : true
       * count : 
       * flags : Avoid,Flattened,List,Seq
       */
      'id' => 'XMP::crd.XMP-crd:GradientBasedCorrRangeMaskAreaModels',
      'desc' => [
        'en' => 'Gradient Based Corr Range Mask Area Models',
      ],
    ],
  ];

}
