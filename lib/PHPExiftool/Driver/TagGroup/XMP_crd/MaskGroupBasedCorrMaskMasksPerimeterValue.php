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
class MaskGroupBasedCorrMaskMasksPerimeterValue extends AbstractTagGroup
{

  protected string $id = 'XMP-crd:MaskGroupBasedCorrMaskMasksPerimeterValue';

  protected string $name = 'MaskGroupBasedCorrMaskMasksPerimeterValue';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Mask Group Based Corr Mask Masks Perimeter Value',
  ];

  protected int $count = 0;

  protected int $flags = 1;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::crd
       * line : 400175
       * type : real
       * writable : true
       * count : 
       * flags : Avoid,Flattened
       */
      'id' => 'XMP::crd.XMP-crd:MaskGroupBasedCorrMaskMasksPerimeterValue',
      'desc' => [
        'en' => 'Mask Group Based Corr Mask Masks Perimeter Value',
      ],
    ],
  ];

}
