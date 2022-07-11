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
class MaximumOffsetShiftValueUsed extends AbstractTagGroup
{

  protected string $id = 'DICOM:MaximumOffsetShiftValueUsed';

  protected string $name = 'MaximumOffsetShiftValueUsed';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Maximum Offset Shift Value Used',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : DICOM::Main
       * line : 100925
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'DICOM::Main.DICOM:MaximumOffsetShiftValueUsed',
      'desc' => [
        'en' => 'Maximum Offset Shift Value Used',
      ],
    ],
  ];

}
