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
class MaterialAbsoluteDuration extends AbstractTagGroup
{

  protected string $id = 'MXF:MaterialAbsoluteDuration';

  protected string $name = 'MaterialAbsoluteDuration';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Material Absolute Duration',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 168932
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:MaterialAbsoluteDuration',
      'desc' => [
        'en' => 'Material Absolute Duration',
      ],
    ],
    1 => [
      /**
       * table_name : MXF::Main
       * line : 168935
       * type : ?
       * writable : false
       * count : 
       * flags : Unknown
       */
      'id' => 'MXF::Main.MXF:MaterialAbsoluteDuration',
      'desc' => [
        'en' => 'Material Absolute Duration',
      ],
    ],
  ];

}
