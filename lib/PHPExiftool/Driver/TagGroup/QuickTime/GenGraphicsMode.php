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
class GenGraphicsMode extends AbstractTagGroup
{

  protected string $id = 'QuickTime:GenGraphicsMode';

  protected string $name = 'GenGraphicsMode';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Gen Graphics Mode',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::GenMediaInfo
       * line : 313590
       * type : int16u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'QuickTime::GenMediaInfo.QuickTime:GenGraphicsMode',
      'desc' => [
        'en' => 'Gen Graphics Mode',
      ],
    ],
  ];

}
