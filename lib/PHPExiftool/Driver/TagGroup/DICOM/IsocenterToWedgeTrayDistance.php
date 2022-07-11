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
class IsocenterToWedgeTrayDistance extends AbstractTagGroup
{

  protected string $id = 'DICOM:IsocenterToWedgeTrayDistance';

  protected string $name = 'IsocenterToWedgeTrayDistance';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Isocenter To Wedge Tray Distance',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : DICOM::Main
       * line : 103555
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'DICOM::Main.DICOM:IsocenterToWedgeTrayDistance',
      'desc' => [
        'en' => 'Isocenter To Wedge Tray Distance',
      ],
    ],
  ];

}
