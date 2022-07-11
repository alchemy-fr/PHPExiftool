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
class FontName extends AbstractTagGroup
{

  protected string $id = 'QuickTime:FontName';

  protected string $name = 'FontName';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Font Name',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::TCMediaInfo
       * line : 325350
       * type : pstring
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'QuickTime::TCMediaInfo.QuickTime:FontName',
      'desc' => [
        'en' => 'Font Name',
      ],
    ],
  ];

}
