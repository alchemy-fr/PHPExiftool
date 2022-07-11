<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_dwc;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MachineObservationEndDayOfYear extends AbstractTagGroup
{

  protected string $id = 'XMP-dwc:MachineObservationEndDayOfYear';

  protected string $name = 'MachineObservationEndDayOfYear';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Machine Observation End Day Of Year',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : DarwinCore::Main
       * line : 106712
       * type : integer
       * writable : true
       * count : 
       * flags : Flattened
       */
      'id' => 'DarwinCore::Main.XMP-dwc:MachineObservationEndDayOfYear',
      'desc' => [
        'en' => 'Machine Observation End Day Of Year',
      ],
    ],
  ];

}
