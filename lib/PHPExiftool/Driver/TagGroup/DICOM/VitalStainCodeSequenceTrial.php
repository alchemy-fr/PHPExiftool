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
class VitalStainCodeSequenceTrial extends AbstractTagGroup
{

  protected string $id = 'DICOM:VitalStainCodeSequenceTrial';

  protected string $name = 'VitalStainCodeSequenceTrial';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Vital Stain Code Sequence Trial',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : DICOM::Main
       * line : 100179
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'DICOM::Main.DICOM:VitalStainCodeSequenceTrial',
      'desc' => [
        'en' => 'Vital Stain Code Sequence Trial',
      ],
    ],
  ];

}
