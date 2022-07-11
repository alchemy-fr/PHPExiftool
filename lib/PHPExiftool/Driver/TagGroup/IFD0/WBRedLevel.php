<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\IFD0;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class WBRedLevel extends AbstractTagGroup
{

  protected string $id = 'IFD0:WBRedLevel';

  protected string $name = 'WBRedLevel';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'WB Red Level',
    'fr' => 'Niveau Rouge Balance des Blancs',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : PanasonicRaw::Main
       * line : 280790
       * type : int16u
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'PanasonicRaw::Main.IFD0:WBRedLevel',
      'desc' => [
        'en' => 'WB Red Level',
        'fr' => 'Niveau Rouge Balance des Blancs',
      ],
    ],
  ];

}
