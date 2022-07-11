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
class ShutterPresentationColorCIELabVal extends AbstractTagGroup
{

  protected string $id = 'DICOM:ShutterPresentationColorCIELabVal';

  protected string $name = 'ShutterPresentationColorCIELabVal';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Shutter Presentation Color CIE Lab Val',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : DICOM::Main
       * line : 96433
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'DICOM::Main.DICOM:ShutterPresentationColorCIELabVal',
      'desc' => [
        'en' => 'Shutter Presentation Color CIE Lab Val',
      ],
    ],
  ];

}
