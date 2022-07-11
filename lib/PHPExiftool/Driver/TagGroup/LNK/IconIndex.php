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
class IconIndex extends AbstractTagGroup
{

  protected string $id = 'LNK:IconIndex';

  protected string $name = 'IconIndex';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Icon Index',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : LNK::Main
       * line : 161796
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'LNK::Main.LNK:IconIndex',
      'desc' => [
        'en' => 'Icon Index',
      ],
    ],
  ];

}
