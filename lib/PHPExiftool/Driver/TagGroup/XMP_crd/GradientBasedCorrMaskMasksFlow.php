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
class GradientBasedCorrMaskMasksFlow extends AbstractTagGroup
{

  protected string $id = 'XMP-crd:GradientBasedCorrMaskMasksFlow';

  protected string $name = 'GradientBasedCorrMaskMasksFlow';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Gradient Based Corr Mask Masks Flow',
  ];

  protected int $count = 0;

  protected int $flags = 1;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::crd
       * line : 399454
       * type : real
       * writable : true
       * count : 
       * flags : Avoid,Flattened
       */
      'id' => 'XMP::crd.XMP-crd:GradientBasedCorrMaskMasksFlow',
      'desc' => [
        'en' => 'Gradient Based Corr Mask Masks Flow',
      ],
    ],
  ];

}
