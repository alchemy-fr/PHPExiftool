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
class CircGradBasedCorrMaskRangeAreaModelsColorSampleInfo extends AbstractTagGroup
{

  protected string $id = 'XMP-crd:CircGradBasedCorrMaskRangeAreaModelsColorSampleInfo';

  protected string $name = 'CircGradBasedCorrMaskRangeAreaModelsColorSampleInfo';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Circ Grad Based Corr Mask Range Area Models Color Sample Info',
  ];

  protected int $count = 0;

  protected int $flags = 65;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::crd
       * line : 398644
       * type : string
       * writable : true
       * count : 
       * flags : Avoid,Flattened,List
       */
      'id' => 'XMP::crd.XMP-crd:CircGradBasedCorrMaskRangeAreaModelsColorSampleInfo',
      'desc' => [
        'en' => 'Circ Grad Based Corr Mask Range Area Models Color Sample Info',
      ],
    ],
  ];

}
