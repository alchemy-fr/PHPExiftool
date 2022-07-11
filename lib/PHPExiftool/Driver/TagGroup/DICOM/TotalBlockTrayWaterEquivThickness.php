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
class TotalBlockTrayWaterEquivThickness extends AbstractTagGroup
{

  protected string $id = 'DICOM:TotalBlockTrayWaterEquivThickness';

  protected string $name = 'TotalBlockTrayWaterEquivThickness';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Total Block Tray Water Equiv Thickness',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : DICOM::Main
       * line : 103621
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'DICOM::Main.DICOM:TotalBlockTrayWaterEquivThickness',
      'desc' => [
        'en' => 'Total Block Tray Water Equiv Thickness',
      ],
    ],
  ];

}
