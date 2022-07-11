<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\CanonCustom;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PF1DisableShootingModes extends AbstractTagGroup
{

  protected string $id = 'CanonCustom:PF1DisableShootingModes';

  protected string $name = 'PF1DisableShootingModes';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'PF1 Disable Shooting Modes',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : CanonCustom::PersonalFuncs
       * line : 78356
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'CanonCustom::PersonalFuncs.CanonCustom:PF1DisableShootingModes',
      'desc' => [
        'en' => 'PF1 Disable Shooting Modes',
      ],
    ],
  ];

}
