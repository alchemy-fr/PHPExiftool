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
class Album extends AbstractTagGroup
{

  protected string $id = 'UserData:Album';

  protected string $name = 'Album';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Album',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::UserData
       * line : 325683
       * type : string
       * writable : true
       * count : 
       * flags : Avoid
       */
      'id' => 'QuickTime::UserData.UserData:Album',
      'desc' => [
        'en' => 'Album',
      ],
    ],
    1 => [
      /**
       * table_name : QuickTime::UserData
       * line : 326094
       * type : string
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'QuickTime::UserData.UserData:Album',
      'desc' => [
        'en' => 'Album',
      ],
    ],
  ];

}
