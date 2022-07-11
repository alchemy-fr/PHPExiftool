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
class OrganAtRiskOverdoseVolumeFraction extends AbstractTagGroup
{

  protected string $id = 'DICOM:OrganAtRiskOverdoseVolumeFraction';

  protected string $name = 'OrganAtRiskOverdoseVolumeFraction';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Organ At Risk Overdose Volume Fraction',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : DICOM::Main
       * line : 103366
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'DICOM::Main.DICOM:OrganAtRiskOverdoseVolumeFraction',
      'desc' => [
        'en' => 'Organ At Risk Overdose Volume Fraction',
      ],
    ],
  ];

}
