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
class AngularVelocity extends AbstractTagGroup
{

  protected string $id = 'QuickTime:AngularVelocity';

  protected string $name = 'AngularVelocity';

  protected ?string $phpType = 'float';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Angular Velocity',
  ];

  protected int $count = 3;

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::Stream
       * line : 324849
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'QuickTime::Stream.QuickTime:AngularVelocity',
      'desc' => [
        'en' => 'Angular Velocity',
      ],
    ],
    1 => [
      /**
       * table_name : QuickTime::camm2
       * line : 326672
       * type : float
       * writable : false
       * count : 3
       * flags : 
       */
      'id' => 'QuickTime::camm2.QuickTime:AngularVelocity',
      'desc' => [
        'en' => 'Angular Velocity',
      ],
    ],
  ];

}
