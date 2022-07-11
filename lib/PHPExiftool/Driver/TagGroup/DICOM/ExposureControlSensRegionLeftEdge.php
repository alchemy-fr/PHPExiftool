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
class ExposureControlSensRegionLeftEdge extends AbstractTagGroup
{

  protected string $id = 'DICOM:ExposureControlSensRegionLeftEdge';

  protected string $name = 'ExposureControlSensRegionLeftEdge';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Exposure Control Sens Region Left Edge',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : DICOM::Main
       * line : 97495
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'DICOM::Main.DICOM:ExposureControlSensRegionLeftEdge',
      'desc' => [
        'en' => 'Exposure Control Sens Region Left Edge',
      ],
    ],
  ];

}
