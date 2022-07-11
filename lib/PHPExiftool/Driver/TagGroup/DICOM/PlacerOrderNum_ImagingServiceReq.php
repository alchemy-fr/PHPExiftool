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
class PlacerOrderNum_ImagingServiceReq extends AbstractTagGroup
{

  protected string $id = 'DICOM:PlacerOrderNum-ImagingServiceReq';

  protected string $name = 'PlacerOrderNum-ImagingServiceReq';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Placer Order Num-Imaging Service Req',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : DICOM::Main
       * line : 100239
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'DICOM::Main.DICOM:PlacerOrderNum-ImagingServiceReq',
      'desc' => [
        'en' => 'Placer Order Num-Imaging Service Req',
      ],
    ],
    1 => [
      /**
       * table_name : DICOM::Main
       * line : 100254
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'DICOM::Main.DICOM:PlacerOrderNum-ImagingServiceReq',
      'desc' => [
        'en' => 'Placer Order Num-Imaging Service Req',
      ],
    ],
  ];

}
