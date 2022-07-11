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
class FontName extends AbstractTagGroup
{

  protected string $id = 'LNK:FontName';

  protected string $name = 'FontName';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Font Name',
  ];

  protected int $count = 64;

  protected array $tags = [
    0 => [
      /**
       * table_name : LNK::ConsoleData
       * line : 161350
       * type : undef
       * writable : false
       * count : 64
       * flags : 
       */
      'id' => 'LNK::ConsoleData.LNK:FontName',
      'desc' => [
        'en' => 'Font Name',
      ],
    ],
  ];

}
