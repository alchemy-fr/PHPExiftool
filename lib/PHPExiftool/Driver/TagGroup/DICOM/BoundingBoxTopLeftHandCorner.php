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
class BoundingBoxTopLeftHandCorner extends AbstractTagGroup
{

  protected string $id = 'DICOM:BoundingBoxTopLeftHandCorner';

  protected string $name = 'BoundingBoxTopLeftHandCorner';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Bounding Box Top Left Hand Corner',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : DICOM::Main
       * line : 101599
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'DICOM::Main.DICOM:BoundingBoxTopLeftHandCorner',
      'desc' => [
        'en' => 'Bounding Box Top Left Hand Corner',
      ],
    ],
  ];

}
