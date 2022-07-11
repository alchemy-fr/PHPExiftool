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
class WB_BlueLevelsShade extends AbstractTagGroup
{

  protected string $id = 'Minolta:WB_BlueLevelsShade';

  protected string $name = 'WB_BlueLevelsShade';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'WB Blue Levels Shade',
  ];

  protected int $count = 7;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Minolta::WBInfoA100
       * line : 185882
       * type : int16u
       * writable : true
       * count : 7
       * flags : Permanent
       */
      'id' => 'Minolta::WBInfoA100.Minolta:WB_BlueLevelsShade',
      'desc' => [
        'en' => 'WB Blue Levels Shade',
      ],
    ],
  ];

}
