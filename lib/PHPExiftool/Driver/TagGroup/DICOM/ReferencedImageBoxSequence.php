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
class ReferencedImageBoxSequence extends AbstractTagGroup
{

  protected string $id = 'DICOM:ReferencedImageBoxSequence';

  protected string $name = 'ReferencedImageBoxSequence';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Referenced Image Box Sequence',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : DICOM::Main
       * line : 102467
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'DICOM::Main.DICOM:ReferencedImageBoxSequence',
      'desc' => [
        'en' => 'Referenced Image Box Sequence',
      ],
    ],
    1 => [
      /**
       * table_name : DICOM::Main
       * line : 102548
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'DICOM::Main.DICOM:ReferencedImageBoxSequence',
      'desc' => [
        'en' => 'Referenced Image Box Sequence',
      ],
    ],
  ];

}
