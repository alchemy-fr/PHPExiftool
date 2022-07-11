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
class RecordedBrachyAccessoryDeviceSeq extends AbstractTagGroup
{

  protected string $id = 'DICOM:RecordedBrachyAccessoryDeviceSeq';

  protected string $name = 'RecordedBrachyAccessoryDeviceSeq';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Recorded Brachy Accessory Device Seq',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : DICOM::Main
       * line : 103198
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'DICOM::Main.DICOM:RecordedBrachyAccessoryDeviceSeq',
      'desc' => [
        'en' => 'Recorded Brachy Accessory Device Seq',
      ],
    ],
  ];

}
