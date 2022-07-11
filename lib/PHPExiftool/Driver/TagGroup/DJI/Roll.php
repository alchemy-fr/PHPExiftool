<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\DJI;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Roll extends AbstractTagGroup
{

  protected string $id = 'DJI:Roll';

  protected string $name = 'Roll';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Roll',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : DJI::Main
       * line : 104868
       * type : float
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'DJI::Main.DJI:Roll',
      'desc' => [
        'en' => 'Roll',
      ],
    ],
  ];

}
