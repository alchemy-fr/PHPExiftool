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
class WBShiftAB_GM extends AbstractTagGroup
{

  protected string $id = 'Sony:WBShiftAB_GM';

  protected string $name = 'WBShiftAB_GM';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'WB Shift AB GM',
  ];

  protected int $count = 2;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::Main
       * line : 354776
       * type : int32s
       * writable : true
       * count : 2
       * flags : Permanent
       */
      'id' => 'Sony::Main.Sony:WBShiftAB_GM',
      'desc' => [
        'en' => 'WB Shift AB GM',
      ],
    ],
  ];

}
