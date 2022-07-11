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
class CircGradBasedCorrRangeMaskAreaModelsColorSampleInfo extends AbstractTagGroup
{

  protected string $id = 'XMP-crd:CircGradBasedCorrRangeMaskAreaModelsColorSampleInfo';

  protected string $name = 'CircGradBasedCorrRangeMaskAreaModelsColorSampleInfo';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Circ Grad Based Corr Range Mask Area Models Color Sample Info',
  ];

  protected int $count = 0;

  protected int $flags = 65;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::crd
       * line : 398920
       * type : string
       * writable : true
       * count : 
       * flags : Avoid,Flattened,List
       */
      'id' => 'XMP::crd.XMP-crd:CircGradBasedCorrRangeMaskAreaModelsColorSampleInfo',
      'desc' => [
        'en' => 'Circ Grad Based Corr Range Mask Area Models Color Sample Info',
      ],
    ],
  ];

}
