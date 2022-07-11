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
class GenPurposeSchedProcStepPriority extends AbstractTagGroup
{

  protected string $id = 'DICOM:GenPurposeSchedProcStepPriority';

  protected string $name = 'GenPurposeSchedProcStepPriority';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Gen Purpose Sched Proc Step Priority',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : DICOM::Main
       * line : 100272
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'DICOM::Main.DICOM:GenPurposeSchedProcStepPriority',
      'desc' => [
        'en' => 'Gen Purpose Sched Proc Step Priority',
      ],
    ],
  ];

}
