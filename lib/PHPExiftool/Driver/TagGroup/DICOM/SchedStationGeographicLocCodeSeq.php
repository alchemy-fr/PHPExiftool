<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\DICOM;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SchedStationGeographicLocCodeSeq extends AbstractTagGroup
{

  protected string $id = 'DICOM:SchedStationGeographicLocCodeSeq';

  protected string $name = 'SchedStationGeographicLocCodeSeq';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Sched Station Geographic Loc Code Seq',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : DICOM::Main
       * line : 100326
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'DICOM::Main.DICOM:SchedStationGeographicLocCodeSeq',
      'desc' => [
        'en' => 'Sched Station Geographic Loc Code Seq',
      ],
    ],
  ];

}
