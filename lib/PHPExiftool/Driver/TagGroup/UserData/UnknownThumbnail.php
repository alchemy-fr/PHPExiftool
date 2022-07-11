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
class UnknownThumbnail extends AbstractTagGroup
{

  protected string $id = 'UserData:UnknownThumbnail';

  protected string $name = 'UnknownThumbnail';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Unknown Thumbnail',
  ];

  protected int $count = 0;

  protected int $flags = 2;

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::UserData
       * line : 326019
       * type : string
       * writable : true
       * count : 
       * flags : Binary
       */
      'id' => 'QuickTime::UserData.UserData:UnknownThumbnail',
      'desc' => [
        'en' => 'Unknown Thumbnail',
      ],
    ],
  ];

}
