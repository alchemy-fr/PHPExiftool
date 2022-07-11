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
class ReferencedPrintJobSequence extends AbstractTagGroup
{

  protected string $id = 'DICOM:ReferencedPrintJobSequence';

  protected string $name = 'ReferencedPrintJobSequence';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Referenced Print Job Sequence',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : DICOM::Main
       * line : 102613
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'DICOM::Main.DICOM:ReferencedPrintJobSequence',
      'desc' => [
        'en' => 'Referenced Print Job Sequence',
      ],
    ],
    1 => [
      /**
       * table_name : DICOM::Main
       * line : 102636
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'DICOM::Main.DICOM:ReferencedPrintJobSequence',
      'desc' => [
        'en' => 'Referenced Print Job Sequence',
      ],
    ],
  ];

}
