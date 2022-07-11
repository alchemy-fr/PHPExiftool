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
class TreatmentSessionIonBeamSequence extends AbstractTagGroup
{

  protected string $id = 'DICOM:TreatmentSessionIonBeamSequence';

  protected string $name = 'TreatmentSessionIonBeamSequence';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Treatment Session Ion Beam Sequence',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : DICOM::Main
       * line : 103021
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'DICOM::Main.DICOM:TreatmentSessionIonBeamSequence',
      'desc' => [
        'en' => 'Treatment Session Ion Beam Sequence',
      ],
    ],
  ];

}
