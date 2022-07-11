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
class ReferencedOverlaySequence extends AbstractTagGroup
{

  protected string $id = 'DICOM:ReferencedOverlaySequence';

  protected string $name = 'ReferencedOverlaySequence';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Referenced Overlay Sequence',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : DICOM::Main
       * line : 95271
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'DICOM::Main.DICOM:ReferencedOverlaySequence',
      'desc' => [
        'en' => 'Referenced Overlay Sequence',
      ],
    ],
    1 => [
      /**
       * table_name : DICOM::Main
       * line : 104576
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'DICOM::Main.DICOM:ReferencedOverlaySequence',
      'desc' => [
        'en' => 'Referenced Overlay Sequence',
      ],
    ],
  ];

}
