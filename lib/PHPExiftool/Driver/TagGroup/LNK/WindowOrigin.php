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
class WindowOrigin extends AbstractTagGroup
{

  protected string $id = 'LNK:WindowOrigin';

  protected string $name = 'WindowOrigin';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Window Origin',
  ];

  protected int $count = 2;

  protected array $tags = [
    0 => [
      /**
       * table_name : LNK::ConsoleData
       * line : 161306
       * type : int16u
       * writable : false
       * count : 2
       * flags : 
       */
      'id' => 'LNK::ConsoleData.LNK:WindowOrigin',
      'desc' => [
        'en' => 'Window Origin',
      ],
    ],
  ];

}
