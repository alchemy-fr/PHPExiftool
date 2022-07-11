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
class ParallelReductionFactorInPlane extends AbstractTagGroup
{

  protected string $id = 'DICOM:ParallelReductionFactorInPlane';

  protected string $name = 'ParallelReductionFactorInPlane';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Parallel Reduction Factor In Plane',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : DICOM::Main
       * line : 97020
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'DICOM::Main.DICOM:ParallelReductionFactorInPlane',
      'desc' => [
        'en' => 'Parallel Reduction Factor In Plane',
      ],
    ],
  ];

}
