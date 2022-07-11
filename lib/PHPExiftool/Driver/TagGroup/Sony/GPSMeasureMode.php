<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Sony;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class GPSMeasureMode extends AbstractTagGroup
{

  protected string $id = 'Sony:GPSMeasureMode';

  protected string $name = 'GPSMeasureMode';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'GPS Measure Mode',
    'fr' => 'Mode de mesure GPS',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::rtmd
       * line : 394089
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Sony::rtmd.Sony:GPSMeasureMode',
      'desc' => [
        'en' => 'GPS Measure Mode',
        'fr' => 'Mode de mesure GPS',
      ],
    ],
  ];

}
