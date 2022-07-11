<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Samsung;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class WB_RGGBLevelsIlluminator1 extends AbstractTagGroup
{

  protected string $id = 'Samsung:WB_RGGBLevelsIlluminator1';

  protected string $name = 'WB_RGGBLevelsIlluminator1';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'WB RGGB Levels Illuminator 1',
  ];

  protected int $count = 4;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Samsung::Type2
       * line : 335894
       * type : int32u
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Samsung::Type2.Samsung:WB_RGGBLevelsIlluminator1',
      'desc' => [
        'en' => 'WB RGGB Levels Illuminator 1',
      ],
    ],
  ];

}
