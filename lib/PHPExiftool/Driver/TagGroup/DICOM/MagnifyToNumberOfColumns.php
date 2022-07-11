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
class MagnifyToNumberOfColumns extends AbstractTagGroup
{

  protected string $id = 'DICOM:MagnifyToNumberOfColumns';

  protected string $name = 'MagnifyToNumberOfColumns';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Magnify To Number Of Columns',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : DICOM::Main
       * line : 102533
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'DICOM::Main.DICOM:MagnifyToNumberOfColumns',
      'desc' => [
        'en' => 'Magnify To Number Of Columns',
      ],
    ],
  ];

}
