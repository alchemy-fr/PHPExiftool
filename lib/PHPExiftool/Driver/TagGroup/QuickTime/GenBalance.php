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
class GenBalance extends AbstractTagGroup
{

  protected string $id = 'QuickTime:GenBalance';

  protected string $name = 'GenBalance';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Gen Balance',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::GenMediaInfo
       * line : 313693
       * type : fixed16s
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'QuickTime::GenMediaInfo.QuickTime:GenBalance',
      'desc' => [
        'en' => 'Gen Balance',
      ],
    ],
  ];

}
