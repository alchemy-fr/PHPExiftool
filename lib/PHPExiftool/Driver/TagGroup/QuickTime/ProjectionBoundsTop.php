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
class ProjectionBoundsTop extends AbstractTagGroup
{

  protected string $id = 'QuickTime:ProjectionBoundsTop';

  protected string $name = 'ProjectionBoundsTop';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Projection Bounds Top',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::equi
       * line : 326923
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'QuickTime::equi.QuickTime:ProjectionBoundsTop',
      'desc' => [
        'en' => 'Projection Bounds Top',
      ],
    ],
  ];

}
