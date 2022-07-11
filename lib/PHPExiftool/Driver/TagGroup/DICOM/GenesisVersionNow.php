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
class GenesisVersionNow extends AbstractTagGroup
{

  protected string $id = 'DICOM:GenesisVersionNow';

  protected string $name = 'GenesisVersionNow';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Genesis Version Now',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : DICOM::Main
       * line : 95523
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'DICOM::Main.DICOM:GenesisVersionNow',
      'desc' => [
        'en' => 'Genesis Version Now',
      ],
    ],
    1 => [
      /**
       * table_name : DICOM::Main
       * line : 98529
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'DICOM::Main.DICOM:GenesisVersionNow',
      'desc' => [
        'en' => 'Genesis Version Now',
      ],
    ],
    2 => [
      /**
       * table_name : DICOM::Main
       * line : 98535
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'DICOM::Main.DICOM:GenesisVersionNow',
      'desc' => [
        'en' => 'Genesis Version Now',
      ],
    ],
  ];

}
