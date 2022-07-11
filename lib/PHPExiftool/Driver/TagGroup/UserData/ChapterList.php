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
class ChapterList extends AbstractTagGroup
{

  protected string $id = 'UserData:ChapterList';

  protected string $name = 'ChapterList';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Chapter List',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::UserData
       * line : 325728
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'QuickTime::UserData.UserData:ChapterList',
      'desc' => [
        'en' => 'Chapter List',
      ],
    ],
  ];

}
