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
class SeriesFromWhichPrescribed extends AbstractTagGroup
{

  protected string $id = 'DICOM:SeriesFromWhichPrescribed';

  protected string $name = 'SeriesFromWhichPrescribed';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Series From Which Prescribed',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : DICOM::Main
       * line : 98526
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'DICOM::Main.DICOM:SeriesFromWhichPrescribed',
      'desc' => [
        'en' => 'Series From Which Prescribed',
      ],
    ],
    1 => [
      /**
       * table_name : DICOM::Main
       * line : 98545
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'DICOM::Main.DICOM:SeriesFromWhichPrescribed',
      'desc' => [
        'en' => 'Series From Which Prescribed',
      ],
    ],
  ];

}
