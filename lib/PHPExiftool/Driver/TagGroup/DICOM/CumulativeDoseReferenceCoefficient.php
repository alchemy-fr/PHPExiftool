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
class CumulativeDoseReferenceCoefficient extends AbstractTagGroup
{

  protected string $id = 'DICOM:CumulativeDoseReferenceCoefficient';

  protected string $name = 'CumulativeDoseReferenceCoefficient';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Cumulative Dose Reference Coefficient',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : DICOM::Main
       * line : 103679
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'DICOM::Main.DICOM:CumulativeDoseReferenceCoefficient',
      'desc' => [
        'en' => 'Cumulative Dose Reference Coefficient',
      ],
    ],
  ];

}
