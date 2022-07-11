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
class UnknownTags extends AbstractTagGroup
{

  protected string $id = 'UserData:UnknownTags';

  protected string $name = 'UnknownTags';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Unknown Tags',
  ];

  protected int $count = 0;

  protected int $flags = 34;

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::UserData
       * line : 325658
       * type : string
       * writable : true
       * count : 
       * flags : Binary,Unknown
       */
      'id' => 'QuickTime::UserData.UserData:UnknownTags',
      'desc' => [
        'en' => 'Unknown Tags',
      ],
    ],
  ];

}
