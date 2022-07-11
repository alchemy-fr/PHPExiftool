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
class DopplerSampleVolumeXPosition extends AbstractTagGroup
{

  protected string $id = 'DICOM:DopplerSampleVolumeXPosition';

  protected string $name = 'DopplerSampleVolumeXPosition';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Doppler Sample Volume X Position',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : DICOM::Main
       * line : 96659
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'DICOM::Main.DICOM:DopplerSampleVolumeXPosition',
      'desc' => [
        'en' => 'Doppler Sample Volume X Position',
      ],
    ],
  ];

}
