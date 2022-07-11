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
class ColorGradeHighlightLum extends AbstractTagGroup
{

  protected string $id = 'XMP-crs:ColorGradeHighlightLum';

  protected string $name = 'ColorGradeHighlightLum';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Color Grade Highlight Lum',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::crs
       * line : 402383
       * type : integer
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'XMP::crs.XMP-crs:ColorGradeHighlightLum',
      'desc' => [
        'en' => 'Color Grade Highlight Lum',
      ],
    ],
  ];

}
