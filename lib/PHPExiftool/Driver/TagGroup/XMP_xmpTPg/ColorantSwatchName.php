<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_xmpTPg;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ColorantSwatchName extends AbstractTagGroup
{

  protected string $id = 'XMP-xmpTPg:ColorantSwatchName';

  protected string $name = 'ColorantSwatchName';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Colorant Swatch Name',
  ];

  protected int $count = 0;

  protected int $flags = 64;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::xmpTPg
       * line : 414806
       * type : string
       * writable : true
       * count : 
       * flags : Flattened,List
       */
      'id' => 'XMP::xmpTPg.XMP-xmpTPg:ColorantSwatchName',
      'desc' => [
        'en' => 'Colorant Swatch Name',
      ],
    ],
  ];

}
