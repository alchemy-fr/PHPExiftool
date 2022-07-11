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
class IsocenterToBeamLimitingDeviceDist extends AbstractTagGroup
{

  protected string $id = 'DICOM:IsocenterToBeamLimitingDeviceDist';

  protected string $name = 'IsocenterToBeamLimitingDeviceDist';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Isocenter To Beam Limiting Device Dist',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : DICOM::Main
       * line : 103489
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'DICOM::Main.DICOM:IsocenterToBeamLimitingDeviceDist',
      'desc' => [
        'en' => 'Isocenter To Beam Limiting Device Dist',
      ],
    ],
  ];

}
