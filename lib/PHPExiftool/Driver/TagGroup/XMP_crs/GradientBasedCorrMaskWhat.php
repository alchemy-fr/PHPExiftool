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
class GradientBasedCorrMaskWhat extends AbstractTagGroup
{

  protected string $id = 'XMP-crs:GradientBasedCorrMaskWhat';

  protected string $name = 'GradientBasedCorrMaskWhat';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Gradient Based Corr Mask What',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::crs
       * line : 402911
       * type : string
       * writable : true
       * count : 
       * flags : Flattened
       */
      'id' => 'XMP::crs.XMP-crs:GradientBasedCorrMaskWhat',
      'desc' => [
        'en' => 'Gradient Based Corr Mask What',
      ],
    ],
  ];

}
