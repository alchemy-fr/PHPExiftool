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
class ConfidentialityOnPatientDataDescr extends AbstractTagGroup
{

  protected string $id = 'DICOM:ConfidentialityOnPatientDataDescr';

  protected string $name = 'ConfidentialityOnPatientDataDescr';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Confidentiality On Patient Data Descr',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : DICOM::Main
       * line : 100263
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'DICOM::Main.DICOM:ConfidentialityOnPatientDataDescr',
      'desc' => [
        'en' => 'Confidentiality On Patient Data Descr',
      ],
    ],
  ];

}
