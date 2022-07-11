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
class CurrentRequestedProcEvidenceSeq extends AbstractTagGroup
{

  protected string $id = 'DICOM:CurrentRequestedProcEvidenceSeq';

  protected string $name = 'CurrentRequestedProcEvidenceSeq';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Current Requested Proc Evidence Seq',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : DICOM::Main
       * line : 100543
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'DICOM::Main.DICOM:CurrentRequestedProcEvidenceSeq',
      'desc' => [
        'en' => 'Current Requested Proc Evidence Seq',
      ],
    ],
  ];

}
