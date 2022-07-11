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
class RawDataType extends AbstractTagGroup
{

  protected string $id = 'DICOM:RawDataType';

  protected string $name = 'RawDataType';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Raw Data Type',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : DICOM::Main
       * line : 98126
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'DICOM::Main.DICOM:RawDataType',
      'desc' => [
        'en' => 'Raw Data Type',
      ],
    ],
    1 => [
      /**
       * table_name : DICOM::Main
       * line : 100761
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'DICOM::Main.DICOM:RawDataType',
      'desc' => [
        'en' => 'Raw Data Type',
      ],
    ],
    2 => [
      /**
       * table_name : DICOM::Main
       * line : 100764
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'DICOM::Main.DICOM:RawDataType',
      'desc' => [
        'en' => 'Raw Data Type',
      ],
    ],
    3 => [
      /**
       * table_name : DICOM::Main
       * line : 100770
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'DICOM::Main.DICOM:RawDataType',
      'desc' => [
        'en' => 'Raw Data Type',
      ],
    ],
  ];

}
