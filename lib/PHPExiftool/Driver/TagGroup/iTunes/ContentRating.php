<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\iTunes;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ContentRating extends AbstractTagGroup
{

  protected string $id = 'iTunes:ContentRating';

  protected string $name = 'ContentRating';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Content Rating',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::iTunesInfo
       * line : 327010
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'QuickTime::iTunesInfo.iTunes:ContentRating',
      'desc' => [
        'en' => 'Content Rating',
      ],
    ],
  ];

}
