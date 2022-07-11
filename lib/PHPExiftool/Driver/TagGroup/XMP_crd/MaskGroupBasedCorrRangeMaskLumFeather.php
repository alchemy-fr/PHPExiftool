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
class MaskGroupBasedCorrRangeMaskLumFeather extends AbstractTagGroup
{

  protected string $id = 'XMP-crd:MaskGroupBasedCorrRangeMaskLumFeather';

  protected string $name = 'MaskGroupBasedCorrRangeMaskLumFeather';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Mask Group Based Corr Range Mask Lum Feather',
  ];

  protected int $count = 0;

  protected int $flags = 65;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::crd
       * line : 400313
       * type : real
       * writable : true
       * count : 
       * flags : Avoid,Flattened,List
       */
      'id' => 'XMP::crd.XMP-crd:MaskGroupBasedCorrRangeMaskLumFeather',
      'desc' => [
        'en' => 'Mask Group Based Corr Range Mask Lum Feather',
      ],
    ],
  ];

}
