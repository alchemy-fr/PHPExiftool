<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\EXE;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class TimeStamp extends AbstractTagGroup
{

  protected string $id = 'EXE:TimeStamp';

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
       * table_name : EXE::Main
       * line : 109137
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'EXE::Main.EXE:TimeStamp',
      'desc' => [
        'en' => 'Time Stamp',
      ],
    ],
    1 => [
      /**
       * table_name : EXE::PEF
       * line : 109331
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'EXE::PEF.EXE:TimeStamp',
      'desc' => [
        'en' => 'Time Stamp',
      ],
    ],
  ];

}
