<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\QuickTime;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ThumbnailRef extends AbstractTagGroup
{

  protected string $id = 'QuickTime:ThumbnailRef';

  protected string $name = 'ThumbnailRef';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Thumbnail Ref',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::ItemRef
       * line : 323591
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'QuickTime::ItemRef.QuickTime:ThumbnailRef',
      'desc' => [
        'en' => 'Thumbnail Ref',
      ],
    ],
  ];

}
