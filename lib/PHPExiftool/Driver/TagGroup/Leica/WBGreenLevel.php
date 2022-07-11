<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Leica;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class WBGreenLevel extends AbstractTagGroup
{

  protected string $id = 'Leica:WBGreenLevel';

  protected string $name = 'WBGreenLevel';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'WB Green Level',
    'fr' => 'Niveau Vert Balance des Blancs',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Panasonic::Leica2
       * line : 275059
       * type : rational64u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Panasonic::Leica2.Leica:WBGreenLevel',
      'desc' => [
        'en' => 'WB Green Level',
        'fr' => 'Niveau Vert Balance des Blancs',
      ],
    ],
  ];

}
