<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_drone_dji;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FlightRollDegree extends AbstractTagGroup
{

  protected string $id = 'XMP-drone-dji:FlightRollDegree';

  protected string $name = 'FlightRollDegree';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Flight Roll Degree',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : DJI::XMP
       * line : 104976
       * type : real
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'DJI::XMP.XMP-drone-dji:FlightRollDegree',
      'desc' => [
        'en' => 'Flight Roll Degree',
      ],
    ],
  ];

}
