<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\UserData;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class UUID_Unknown extends AbstractTagGroup
{

  protected string $id = 'UserData:UUID-Unknown';

  protected string $name = 'UUID-Unknown';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'UUID-Unknown',
  ];

  protected int $count = 0;

  protected int $flags = 32;

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::UserData
       * line : 326046
       * type : string
       * writable : false
       * count : 
       * flags : Unknown
       */
      'id' => 'QuickTime::UserData.UserData:UUID-Unknown',
      'desc' => [
        'en' => 'UUID-Unknown',
      ],
    ],
  ];

}
