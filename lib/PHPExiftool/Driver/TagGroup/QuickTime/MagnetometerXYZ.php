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
class MagnetometerXYZ extends AbstractTagGroup
{

  protected string $id = 'QuickTime:MagnetometerXYZ';

  protected string $name = 'MagnetometerXYZ';

  protected ?string $phpType = 'float';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Magnetometer XYZ',
  ];

  protected int $count = 3;

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::Mag360Fly
       * line : 324074
       * type : float
       * writable : false
       * count : 3
       * flags : 
       */
      'id' => 'QuickTime::Mag360Fly.QuickTime:MagnetometerXYZ',
      'desc' => [
        'en' => 'Magnetometer XYZ',
      ],
    ],
  ];

}
