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
class OphthalmicFrameLocationSequence extends AbstractTagGroup
{

  protected string $id = 'DICOM:OphthalmicFrameLocationSequence';

  protected string $name = 'OphthalmicFrameLocationSequence';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Ophthalmic Frame Location Sequence',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : DICOM::Main
       * line : 98737
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'DICOM::Main.DICOM:OphthalmicFrameLocationSequence',
      'desc' => [
        'en' => 'Ophthalmic Frame Location Sequence',
      ],
    ],
  ];

}
