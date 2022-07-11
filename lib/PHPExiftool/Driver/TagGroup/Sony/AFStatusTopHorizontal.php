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
class AFStatusTopHorizontal extends AbstractTagGroup
{

  protected string $id = 'Sony:AFStatusTopHorizontal';

  protected string $name = 'AFStatusTopHorizontal';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'AF Status Top Horizontal',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::AFStatus15
       * line : 343763
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::AFStatus15.Sony:AFStatusTopHorizontal',
      'desc' => [
        'en' => 'AF Status Top Horizontal',
      ],
    ],
    1 => [
      /**
       * table_name : Sony::AFStatus19
       * line : 344040
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::AFStatus19.Sony:AFStatusTopHorizontal',
      'desc' => [
        'en' => 'AF Status Top Horizontal',
      ],
    ],
  ];

}
