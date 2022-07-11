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
class GradientBasedCorrMaskRangeAreaModelsColorSampleInfo extends AbstractTagGroup
{

  protected string $id = 'XMP-crd:GradientBasedCorrMaskRangeAreaModelsColorSampleInfo';

  protected string $name = 'GradientBasedCorrMaskRangeAreaModelsColorSampleInfo';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Gradient Based Corr Mask Range Area Models Color Sample Info',
  ];

  protected int $count = 0;

  protected int $flags = 65;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::crd
       * line : 399346
       * type : string
       * writable : true
       * count : 
       * flags : Avoid,Flattened,List
       */
      'id' => 'XMP::crd.XMP-crd:GradientBasedCorrMaskRangeAreaModelsColorSampleInfo',
      'desc' => [
        'en' => 'Gradient Based Corr Mask Range Area Models Color Sample Info',
      ],
    ],
  ];

}
