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
class CircGradBasedCorrMaskFlipped extends AbstractTagGroup
{

  protected string $id = 'XMP-crd:CircGradBasedCorrMaskFlipped';

  protected string $name = 'CircGradBasedCorrMaskFlipped';

  protected ?string $phpType = 'boolean';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Circ Grad Based Corr Mask Flipped',
  ];

  protected int $count = 0;

  protected int $flags = 1;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::crd
       * line : 398692
       * type : boolean
       * writable : true
       * count : 
       * flags : Avoid,Flattened
       */
      'id' => 'XMP::crd.XMP-crd:CircGradBasedCorrMaskFlipped',
      'desc' => [
        'en' => 'Circ Grad Based Corr Mask Flipped',
      ],
    ],
  ];

}
