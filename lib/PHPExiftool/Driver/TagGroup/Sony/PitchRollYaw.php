<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Sony;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PitchRollYaw extends AbstractTagGroup
{

  protected string $id = 'Sony:PitchRollYaw';

  protected string $name = 'PitchRollYaw';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Pitch Roll Yaw',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::rtmd
       * line : 394305
       * type : int16s
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Sony::rtmd.Sony:PitchRollYaw',
      'desc' => [
        'en' => 'Pitch Roll Yaw',
      ],
    ],
  ];

}
