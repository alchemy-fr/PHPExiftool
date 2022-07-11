<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\File;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ColorSpace extends AbstractTagGroup
{

  protected string $id = 'File:ColorSpace';

  protected string $name = 'ColorSpace';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Color Space',
    'fr' => 'Espace colorimétrique',
  ];

  protected int $count = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : BMP::Main
       * line : 3362
       * type : undef
       * writable : false
       * count : 4
       * flags : 
       */
      'id' => 'BMP::Main.File:ColorSpace',
      'desc' => [
        'en' => 'Color Space',
        'fr' => 'Espace colorimétrique',
      ],
    ],
    1 => [
      /**
       * table_name : BPG::Main
       * line : 3632
       * type : int16u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'BPG::Main.File:ColorSpace',
      'desc' => [
        'en' => 'Color Space',
        'fr' => 'Espace colorimétrique',
      ],
    ],
    2 => [
      /**
       * table_name : Other::PFM
       * line : 264106
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Other::PFM.File:ColorSpace',
      'desc' => [
        'en' => 'Color Space',
        'fr' => 'Espace colorimétrique',
      ],
    ],
  ];

}
