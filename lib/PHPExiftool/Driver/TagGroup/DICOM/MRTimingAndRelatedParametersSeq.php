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
class MRTimingAndRelatedParametersSeq extends AbstractTagGroup
{

  protected string $id = 'DICOM:MRTimingAndRelatedParametersSeq';

  protected string $name = 'MRTimingAndRelatedParametersSeq';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'MR Timing And Related Parameters Seq',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : DICOM::Main
       * line : 97115
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'DICOM::Main.DICOM:MRTimingAndRelatedParametersSeq',
      'desc' => [
        'en' => 'MR Timing And Related Parameters Seq',
      ],
    ],
  ];

}
