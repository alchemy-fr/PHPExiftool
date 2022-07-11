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
class ConstraintIndicatorFlags extends AbstractTagGroup
{

  protected string $id = 'QuickTime:ConstraintIndicatorFlags';

  protected string $name = 'ConstraintIndicatorFlags';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Constraint Indicator Flags',
  ];

  protected int $count = 6;

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::HEVCConfig
       * line : 313817
       * type : int8u
       * writable : false
       * count : 6
       * flags : 
       */
      'id' => 'QuickTime::HEVCConfig.QuickTime:ConstraintIndicatorFlags',
      'desc' => [
        'en' => 'Constraint Indicator Flags',
      ],
    ],
  ];

}
