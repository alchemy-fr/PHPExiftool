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
class RealWorldValueLastValueMapped extends AbstractTagGroup
{

  protected string $id = 'DICOM:RealWorldValueLastValueMapped';

  protected string $name = 'RealWorldValueLastValueMapped';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Real World Value Last Value Mapped',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : DICOM::Main
       * line : 100378
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'DICOM::Main.DICOM:RealWorldValueLastValueMapped',
      'desc' => [
        'en' => 'Real World Value Last Value Mapped',
      ],
    ],
  ];

}
