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
class HL7StructuredDocumentRefSeq extends AbstractTagGroup
{

  protected string $id = 'DICOM:HL7StructuredDocumentRefSeq';

  protected string $name = 'HL7StructuredDocumentRefSeq';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'HL7 Structured Document Ref Seq',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : DICOM::Main
       * line : 100549
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'DICOM::Main.DICOM:HL7StructuredDocumentRefSeq',
      'desc' => [
        'en' => 'HL7 Structured Document Ref Seq',
      ],
    ],
  ];

}
