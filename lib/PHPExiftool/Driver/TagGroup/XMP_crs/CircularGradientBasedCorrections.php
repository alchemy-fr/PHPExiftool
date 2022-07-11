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
class CircularGradientBasedCorrections extends AbstractTagGroup
{

  protected string $id = 'XMP-crs:CircularGradientBasedCorrections';

  protected string $name = 'CircularGradientBasedCorrections';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Circular Gradient Based Corrections',
  ];

  protected int $count = 0;

  protected int $flags = 576;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::crs
       * line : 401927
       * type : struct
       * writable : true
       * count : 
       * flags : List,Seq
       */
      'id' => 'XMP::crs.XMP-crs:CircularGradientBasedCorrections',
      'desc' => [
        'en' => 'Circular Gradient Based Corrections',
      ],
    ],
  ];

}
