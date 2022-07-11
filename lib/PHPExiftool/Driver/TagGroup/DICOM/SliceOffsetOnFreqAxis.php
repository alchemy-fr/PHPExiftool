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
class SliceOffsetOnFreqAxis extends AbstractTagGroup
{

  protected string $id = 'DICOM:SliceOffsetOnFreqAxis';

  protected string $name = 'SliceOffsetOnFreqAxis';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Slice Offset On Freq Axis',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : DICOM::Main
       * line : 97950
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'DICOM::Main.DICOM:SliceOffsetOnFreqAxis',
      'desc' => [
        'en' => 'Slice Offset On Freq Axis',
      ],
    ],
  ];

}
