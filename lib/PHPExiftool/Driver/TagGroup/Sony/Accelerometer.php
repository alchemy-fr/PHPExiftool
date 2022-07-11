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
class Accelerometer extends AbstractTagGroup
{

  protected string $id = 'Sony:Accelerometer';

  protected string $name = 'Accelerometer';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Accelerometer',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::rtmd
       * line : 394311
       * type : int16s
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Sony::rtmd.Sony:Accelerometer',
      'desc' => [
        'en' => 'Accelerometer',
      ],
    ],
  ];

}
