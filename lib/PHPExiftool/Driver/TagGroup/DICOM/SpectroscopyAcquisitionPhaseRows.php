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
class SpectroscopyAcquisitionPhaseRows extends AbstractTagGroup
{

  protected string $id = 'DICOM:SpectroscopyAcquisitionPhaseRows';

  protected string $name = 'SpectroscopyAcquisitionPhaseRows';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Spectroscopy Acquisition Phase Rows',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : DICOM::Main
       * line : 97084
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'DICOM::Main.DICOM:SpectroscopyAcquisitionPhaseRows',
      'desc' => [
        'en' => 'Spectroscopy Acquisition Phase Rows',
      ],
    ],
  ];

}
