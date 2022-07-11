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
class WB_RGGBLevelsFluorescentL extends AbstractTagGroup
{

  protected string $id = 'Pentax:WB_RGGBLevelsFluorescentL';

  protected string $name = 'WB_RGGBLevelsFluorescentL';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'WB RGGB Levels Fluorescent L',
  ];

  protected int $count = 4;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Pentax::WBLevels
       * line : 303451
       * type : int16u
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Pentax::WBLevels.Pentax:WB_RGGBLevelsFluorescentL',
      'desc' => [
        'en' => 'WB RGGB Levels Fluorescent L',
      ],
    ],
  ];

}
