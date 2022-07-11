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
class UserData_uid extends AbstractTagGroup
{

  protected string $id = 'UserData:UserData_uid';

  protected string $name = 'UserData_uid';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'User Data uid',
  ];

  protected int $count = 0;

  protected int $flags = 34;

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::UserData
       * line : 326395
       * type : undef
       * writable : true
       * count : 
       * flags : Binary,Unknown
       */
      'id' => 'QuickTime::UserData.UserData:UserData_uid',
      'desc' => [
        'en' => 'User Data uid',
      ],
    ],
  ];

}
