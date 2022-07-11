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
class PaintBasedCorrections extends AbstractTagGroup
{

  protected string $id = 'XMP-crs:PaintBasedCorrections';

  protected string $name = 'PaintBasedCorrections';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Paint Based Corrections',
  ];

  protected int $count = 0;

  protected int $flags = 576;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::crs
       * line : 403776
       * type : struct
       * writable : true
       * count : 
       * flags : List,Seq
       */
      'id' => 'XMP::crs.XMP-crs:PaintBasedCorrections',
      'desc' => [
        'en' => 'Paint Based Corrections',
      ],
    ],
  ];

}
