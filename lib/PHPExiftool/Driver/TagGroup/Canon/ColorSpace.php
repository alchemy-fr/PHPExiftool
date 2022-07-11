<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Canon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ColorSpace extends AbstractTagGroup
{

  protected string $id = 'Canon:ColorSpace';

  protected string $name = 'ColorSpace';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Color Space',
    'fr' => 'Espace colorimétrique',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::ColorInfo
       * line : 63136
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::ColorInfo.Canon:ColorSpace',
      'desc' => [
        'en' => 'Color Space',
        'fr' => 'Espace colorimétrique',
      ],
    ],
    1 => [
      /**
       * table_name : Canon::Main
       * line : 65947
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::Main.Canon:ColorSpace',
      'desc' => [
        'en' => 'Color Space',
        'fr' => 'Espace colorimétrique',
      ],
    ],
  ];

}
