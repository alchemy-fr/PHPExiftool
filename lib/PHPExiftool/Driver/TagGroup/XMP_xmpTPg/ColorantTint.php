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
class ColorantTint extends AbstractTagGroup
{

  protected string $id = 'XMP-xmpTPg:ColorantTint';

  protected string $name = 'ColorantTint';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Colorant Tint',
  ];

  protected int $count = 0;

  protected int $flags = 64;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::xmpTPg
       * line : 414811
       * type : integer
       * writable : true
       * count : 
       * flags : Flattened,List
       */
      'id' => 'XMP::xmpTPg.XMP-xmpTPg:ColorantTint',
      'desc' => [
        'en' => 'Colorant Tint',
      ],
    ],
  ];

}
