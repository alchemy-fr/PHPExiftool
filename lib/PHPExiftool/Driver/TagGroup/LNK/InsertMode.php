<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\LNK;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class InsertMode extends AbstractTagGroup
{

  protected string $id = 'LNK:InsertMode';

  protected string $name = 'InsertMode';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Insert Mode',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : LNK::ConsoleData
       * line : 161368
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'LNK::ConsoleData.LNK:InsertMode',
      'desc' => [
        'en' => 'Insert Mode',
      ],
    ],
  ];

}
