<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Canon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class WB_GRGBLevelsTungsten extends AbstractTagGroup
{

  protected string $id = 'Canon:WB_GRGBLevelsTungsten';

  protected string $name = 'WB_GRGBLevelsTungsten';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'WB GRGB Levels Tungsten',
  ];

  protected int $count = 4;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::WBInfo
       * line : 71259
       * type : int32s
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Canon::WBInfo.Canon:WB_GRGBLevelsTungsten',
      'desc' => [
        'en' => 'WB GRGB Levels Tungsten',
      ],
    ],
  ];

}
