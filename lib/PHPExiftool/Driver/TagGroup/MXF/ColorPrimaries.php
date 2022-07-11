<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MXF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ColorPrimaries extends AbstractTagGroup
{

  protected string $id = 'MXF:ColorPrimaries';

  protected string $name = 'ColorPrimaries';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Color Primaries',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 172409
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:ColorPrimaries',
      'desc' => [
        'en' => 'Color Primaries',
      ],
    ],
    1 => [
      /**
       * table_name : MXF::Main
       * line : 172415
       * type : ?
       * writable : false
       * count : 
       * flags : Unknown
       */
      'id' => 'MXF::Main.MXF:ColorPrimaries',
      'desc' => [
        'en' => 'Color Primaries',
      ],
    ],
  ];

}
