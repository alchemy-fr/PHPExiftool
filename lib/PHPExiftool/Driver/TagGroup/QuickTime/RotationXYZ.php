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
class RotationXYZ extends AbstractTagGroup
{

  protected string $id = 'QuickTime:RotationXYZ';

  protected string $name = 'RotationXYZ';

  protected ?string $phpType = 'float';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Rotation XYZ',
  ];

  protected int $count = 3;

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::Rot360Fly
       * line : 324740
       * type : float
       * writable : false
       * count : 3
       * flags : 
       */
      'id' => 'QuickTime::Rot360Fly.QuickTime:RotationXYZ',
      'desc' => [
        'en' => 'Rotation XYZ',
      ],
    ],
  ];

}
