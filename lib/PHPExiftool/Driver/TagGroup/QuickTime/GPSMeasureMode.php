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
class GPSMeasureMode extends AbstractTagGroup
{

  protected string $id = 'QuickTime:GPSMeasureMode';

  protected string $name = 'GPSMeasureMode';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'GPS Measure Mode',
    'fr' => 'Mode de mesure GPS',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::camm6
       * line : 326764
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'QuickTime::camm6.QuickTime:GPSMeasureMode',
      'desc' => [
        'en' => 'GPS Measure Mode',
        'fr' => 'Mode de mesure GPS',
      ],
    ],
  ];

}
