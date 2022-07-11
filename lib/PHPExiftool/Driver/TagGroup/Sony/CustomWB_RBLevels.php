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
class CustomWB_RBLevels extends AbstractTagGroup
{

  protected string $id = 'Sony:CustomWB_RBLevels';

  protected string $name = 'CustomWB_RBLevels';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Custom WB RB Levels',
  ];

  protected int $count = 2;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::MoreSettings
       * line : 361103
       * type : int16uRev
       * writable : true
       * count : 2
       * flags : Permanent
       */
      'id' => 'Sony::MoreSettings.Sony:CustomWB_RBLevels',
      'desc' => [
        'en' => 'Custom WB RB Levels',
      ],
    ],
  ];

}
