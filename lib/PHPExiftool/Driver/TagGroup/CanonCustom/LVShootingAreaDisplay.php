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
class LVShootingAreaDisplay extends AbstractTagGroup
{

  protected string $id = 'CanonCustom:LVShootingAreaDisplay';

  protected string $name = 'LVShootingAreaDisplay';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'LV Shooting Area Display',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : CanonCustom::Functions2
       * line : 73523
       * type : int32s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'CanonCustom::Functions2.CanonCustom:LVShootingAreaDisplay',
      'desc' => [
        'en' => 'LV Shooting Area Display',
      ],
    ],
    1 => [
      /**
       * table_name : CanonCustom::Functions2
       * line : 73534
       * type : int32s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'CanonCustom::Functions2.CanonCustom:LVShootingAreaDisplay',
      'desc' => [
        'en' => 'LV Shooting Area Display',
      ],
    ],
  ];

}
