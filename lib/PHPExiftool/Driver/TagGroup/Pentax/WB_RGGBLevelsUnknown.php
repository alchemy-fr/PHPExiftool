<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Pentax;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class WB_RGGBLevelsUnknown extends AbstractTagGroup
{

  protected string $id = 'Pentax:WB_RGGBLevelsUnknown';

  protected string $name = 'WB_RGGBLevelsUnknown';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'WB RGGB Levels Unknown',
  ];

  protected int $count = 4;

  protected int $flags = 36;

  protected array $tags = [
    0 => [
      /**
       * table_name : Pentax::WBLevels
       * line : 303454
       * type : int16u
       * writable : true
       * count : 4
       * flags : Permanent,Unknown
       */
      'id' => 'Pentax::WBLevels.Pentax:WB_RGGBLevelsUnknown',
      'desc' => [
        'en' => 'WB RGGB Levels Unknown',
      ],
    ],
  ];

}
