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
class FillAttributes extends AbstractTagGroup
{

  protected string $id = 'LNK:FillAttributes';

  protected string $name = 'FillAttributes';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Fill Attributes',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : LNK::ConsoleData
       * line : 161290
       * type : int16u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'LNK::ConsoleData.LNK:FillAttributes',
      'desc' => [
        'en' => 'Fill Attributes',
      ],
    ],
  ];

}
