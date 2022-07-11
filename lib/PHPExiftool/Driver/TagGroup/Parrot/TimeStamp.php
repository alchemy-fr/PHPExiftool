<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Parrot;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class TimeStamp extends AbstractTagGroup
{

  protected string $id = 'Parrot:TimeStamp';

  protected string $name = 'TimeStamp';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Time Stamp',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Parrot::TimeStamp
       * line : 282355
       * type : int64u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Parrot::TimeStamp.Parrot:TimeStamp',
      'desc' => [
        'en' => 'Time Stamp',
      ],
    ],
  ];

}
