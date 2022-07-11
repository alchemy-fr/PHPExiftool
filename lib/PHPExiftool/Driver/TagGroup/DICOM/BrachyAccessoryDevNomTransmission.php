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
class BrachyAccessoryDevNomTransmission extends AbstractTagGroup
{

  protected string $id = 'DICOM:BrachyAccessoryDevNomTransmission';

  protected string $name = 'BrachyAccessoryDevNomTransmission';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Brachy Accessory Dev Nom Transmission',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : DICOM::Main
       * line : 103967
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'DICOM::Main.DICOM:BrachyAccessoryDevNomTransmission',
      'desc' => [
        'en' => 'Brachy Accessory Dev Nom Transmission',
      ],
    ],
  ];

}
