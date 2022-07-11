<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MenuSettingsZ9Offset extends AbstractTagGroup
{

  protected string $id = 'Nikon:MenuSettingsZ9Offset';

  protected string $name = 'MenuSettingsZ9Offset';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Menu Settings Z9 Offset',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::ShotInfoZ9
       * line : 209780
       * type : ?
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfoZ9.Nikon:MenuSettingsZ9Offset',
      'desc' => [
        'en' => 'Menu Settings Z9 Offset',
      ],
    ],
  ];

}
