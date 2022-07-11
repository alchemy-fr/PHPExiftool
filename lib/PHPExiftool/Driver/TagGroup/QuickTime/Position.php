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
class Position extends AbstractTagGroup
{

  protected string $id = 'QuickTime:Position';

  protected string $name = 'Position';

  protected ?string $phpType = 'float';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Position',
  ];

  protected int $count = 3;

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::camm4
       * line : 326687
       * type : float
       * writable : false
       * count : 3
       * flags : 
       */
      'id' => 'QuickTime::camm4.QuickTime:Position',
      'desc' => [
        'en' => 'Position',
      ],
    ],
  ];

}
