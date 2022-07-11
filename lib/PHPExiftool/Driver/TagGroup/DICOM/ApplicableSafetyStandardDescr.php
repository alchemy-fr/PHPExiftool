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
class ApplicableSafetyStandardDescr extends AbstractTagGroup
{

  protected string $id = 'DICOM:ApplicableSafetyStandardDescr';

  protected string $name = 'ApplicableSafetyStandardDescr';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Applicable Safety Standard Descr',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : DICOM::Main
       * line : 97181
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'DICOM::Main.DICOM:ApplicableSafetyStandardDescr',
      'desc' => [
        'en' => 'Applicable Safety Standard Descr',
      ],
    ],
  ];

}
