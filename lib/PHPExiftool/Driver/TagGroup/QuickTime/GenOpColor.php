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
class GenOpColor extends AbstractTagGroup
{

  protected string $id = 'QuickTime:GenOpColor';

  protected string $name = 'GenOpColor';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Gen Op Color',
  ];

  protected int $count = 3;

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::GenMediaInfo
       * line : 313688
       * type : int16u
       * writable : false
       * count : 3
       * flags : 
       */
      'id' => 'QuickTime::GenMediaInfo.QuickTime:GenOpColor',
      'desc' => [
        'en' => 'Gen Op Color',
      ],
    ],
  ];

}
