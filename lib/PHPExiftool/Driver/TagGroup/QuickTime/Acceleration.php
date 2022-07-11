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
class Acceleration extends AbstractTagGroup
{

  protected string $id = 'QuickTime:Acceleration';

  protected string $name = 'Acceleration';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Acceleration',
  ];

  protected int $count = 3;

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::GPS360Fly
       * line : 313562
       * type : int16u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'QuickTime::GPS360Fly.QuickTime:Acceleration',
      'desc' => [
        'en' => 'Acceleration',
      ],
    ],
    1 => [
      /**
       * table_name : QuickTime::camm3
       * line : 326679
       * type : float
       * writable : false
       * count : 3
       * flags : 
       */
      'id' => 'QuickTime::camm3.QuickTime:Acceleration',
      'desc' => [
        'en' => 'Acceleration',
      ],
    ],
  ];

}
