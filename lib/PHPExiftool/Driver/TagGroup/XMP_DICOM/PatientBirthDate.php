<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_DICOM;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PatientBirthDate extends AbstractTagGroup
{

  protected string $id = 'XMP-DICOM:PatientBirthDate';

  protected string $name = 'PatientBirthDate';

  protected ?string $phpType = 'date';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Patient Birth Date',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::DICOM
       * line : 396783
       * type : date
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'XMP::DICOM.XMP-DICOM:PatientBirthDate',
      'desc' => [
        'en' => 'Patient Birth Date',
      ],
    ],
  ];

}
