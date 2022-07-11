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
class TreatmentSummaryCalcDoseRefSeq extends AbstractTagGroup
{

  protected string $id = 'DICOM:TreatmentSummaryCalcDoseRefSeq';

  protected string $name = 'TreatmentSummaryCalcDoseRefSeq';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Treatment Summary Calc Dose Ref Seq',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : DICOM::Main
       * line : 103087
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'DICOM::Main.DICOM:TreatmentSummaryCalcDoseRefSeq',
      'desc' => [
        'en' => 'Treatment Summary Calc Dose Ref Seq',
      ],
    ],
  ];

}
