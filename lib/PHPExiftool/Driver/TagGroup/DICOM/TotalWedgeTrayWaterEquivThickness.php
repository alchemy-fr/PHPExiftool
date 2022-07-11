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
class TotalWedgeTrayWaterEquivThickness extends AbstractTagGroup
{

  protected string $id = 'DICOM:TotalWedgeTrayWaterEquivThickness';

  protected string $name = 'TotalWedgeTrayWaterEquivThickness';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Total Wedge Tray Water Equiv Thickness',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : DICOM::Main
       * line : 103549
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'DICOM::Main.DICOM:TotalWedgeTrayWaterEquivThickness',
      'desc' => [
        'en' => 'Total Wedge Tray Water Equiv Thickness',
      ],
    ],
  ];

}
