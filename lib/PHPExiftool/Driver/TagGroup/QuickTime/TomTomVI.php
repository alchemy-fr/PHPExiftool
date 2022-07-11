<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\QuickTime;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class TomTomVI extends AbstractTagGroup
{

  protected string $id = 'QuickTime:TomTomVI';

  protected string $name = 'TomTomVI';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Tom Tom VI',
  ];

  protected int $count = 0;

  protected int $flags = 32;

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::TomTom
       * line : 325368
       * type : int32u
       * writable : false
       * count : 
       * flags : Unknown
       */
      'id' => 'QuickTime::TomTom.QuickTime:TomTomVI',
      'desc' => [
        'en' => 'Tom Tom VI',
      ],
    ],
  ];

}
