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
class CompensatorRelStoppingPowerRatio extends AbstractTagGroup
{

  protected string $id = 'DICOM:CompensatorRelStoppingPowerRatio';

  protected string $name = 'CompensatorRelStoppingPowerRatio';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Compensator Rel Stopping Power Ratio',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : DICOM::Main
       * line : 104081
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'DICOM::Main.DICOM:CompensatorRelStoppingPowerRatio',
      'desc' => [
        'en' => 'Compensator Rel Stopping Power Ratio',
      ],
    ],
  ];

}
