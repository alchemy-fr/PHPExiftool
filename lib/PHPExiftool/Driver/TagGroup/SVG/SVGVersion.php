<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\SVG;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SVGVersion extends AbstractTagGroup
{

  protected string $id = 'SVG:SVGVersion';

  protected string $name = 'SVGVersion';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'SVG Version',
    'fr' => 'Version SVG',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::SVG
       * line : 397892
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'XMP::SVG.SVG:SVGVersion',
      'desc' => [
        'en' => 'SVG Version',
        'fr' => 'Version SVG',
      ],
    ],
  ];

}
