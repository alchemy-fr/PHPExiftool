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
class CircGradBasedCorrMaskMasksMaskInverted extends AbstractTagGroup
{

  protected string $id = 'XMP-crs:CircGradBasedCorrMaskMasksMaskInverted';

  protected string $name = 'CircGradBasedCorrMaskMasksMaskInverted';

  protected ?string $phpType = 'boolean';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Circ Grad Based Corr Mask Masks Mask Inverted',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::crs
       * line : 402095
       * type : boolean
       * writable : true
       * count : 
       * flags : Flattened
       */
      'id' => 'XMP::crs.XMP-crs:CircGradBasedCorrMaskMasksMaskInverted',
      'desc' => [
        'en' => 'Circ Grad Based Corr Mask Masks Mask Inverted',
      ],
    ],
  ];

}
