<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Olympus;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MacroLED extends AbstractTagGroup
{

  protected string $id = 'Olympus:MacroLED';

  protected string $name = 'MacroLED';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Macro LED',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Olympus::FocusInfo
       * line : 255444
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Olympus::FocusInfo.Olympus:MacroLED',
      'desc' => [
        'en' => 'Macro LED',
      ],
    ],
  ];

}
