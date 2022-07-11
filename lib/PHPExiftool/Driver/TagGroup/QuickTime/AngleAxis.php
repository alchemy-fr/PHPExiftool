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
class AngleAxis extends AbstractTagGroup
{

  protected string $id = 'QuickTime:AngleAxis';

  protected string $name = 'AngleAxis';

  protected ?string $phpType = 'float';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Angle Axis',
  ];

  protected int $count = 3;

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::camm0
       * line : 326655
       * type : float
       * writable : false
       * count : 3
       * flags : 
       */
      'id' => 'QuickTime::camm0.QuickTime:AngleAxis',
      'desc' => [
        'en' => 'Angle Axis',
      ],
    ],
  ];

}
