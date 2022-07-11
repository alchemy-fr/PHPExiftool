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
class StudyDateTime extends AbstractTagGroup
{

  protected string $id = 'XMP-DICOM:StudyDateTime';

  protected string $name = 'StudyDateTime';

  protected ?string $phpType = 'date';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Study Date Time',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::DICOM
       * line : 396815
       * type : date
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'XMP::DICOM.XMP-DICOM:StudyDateTime',
      'desc' => [
        'en' => 'Study Date Time',
      ],
    ],
  ];

}
