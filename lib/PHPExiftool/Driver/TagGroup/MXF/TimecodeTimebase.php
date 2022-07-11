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
class TimecodeTimebase extends AbstractTagGroup
{

  protected string $id = 'MXF:TimecodeTimebase';

  protected string $name = 'TimecodeTimebase';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Timecode Timebase',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 168376
       * type : int8u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:TimecodeTimebase',
      'desc' => [
        'en' => 'Timecode Timebase',
      ],
    ],
    1 => [
      /**
       * table_name : MXF::Main
       * line : 169441
       * type : rational64s
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:TimecodeTimebase',
      'desc' => [
        'en' => 'Timecode Timebase',
      ],
    ],
  ];

}
