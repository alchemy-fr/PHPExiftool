<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Minolta;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class WB_RedLevelsKelvin extends AbstractTagGroup
{

  protected string $id = 'Minolta:WB_RedLevelsKelvin';

  protected string $name = 'WB_RedLevelsKelvin';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'WB Red Levels Kelvin',
  ];

  protected int $count = 75;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Minolta::WBInfoA100
       * line : 185903
       * type : int16u
       * writable : true
       * count : 75
       * flags : Permanent
       */
      'id' => 'Minolta::WBInfoA100.Minolta:WB_RedLevelsKelvin',
      'desc' => [
        'en' => 'WB Red Levels Kelvin',
      ],
    ],
  ];

}
