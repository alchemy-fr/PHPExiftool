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
class SoftTissueSurfaceThermalIndex extends AbstractTagGroup
{

  protected string $id = 'DICOM:SoftTissueSurfaceThermalIndex';

  protected string $name = 'SoftTissueSurfaceThermalIndex';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Soft Tissue Surface Thermal Index',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : DICOM::Main
       * line : 96555
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'DICOM::Main.DICOM:SoftTissueSurfaceThermalIndex',
      'desc' => [
        'en' => 'Soft Tissue Surface Thermal Index',
      ],
    ],
  ];

}
