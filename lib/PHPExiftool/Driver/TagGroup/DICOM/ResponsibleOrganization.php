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
class ResponsibleOrganization extends AbstractTagGroup
{

  protected string $id = 'DICOM:ResponsibleOrganization';

  protected string $name = 'ResponsibleOrganization';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Responsible Organization',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : DICOM::Main
       * line : 95189
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'DICOM::Main.DICOM:ResponsibleOrganization',
      'desc' => [
        'en' => 'Responsible Organization',
      ],
    ],
    1 => [
      /**
       * table_name : DICOM::Main
       * line : 95681
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'DICOM::Main.DICOM:ResponsibleOrganization',
      'desc' => [
        'en' => 'Responsible Organization',
      ],
    ],
  ];

}
