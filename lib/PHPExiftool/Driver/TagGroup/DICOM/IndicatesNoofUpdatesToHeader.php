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
class IndicatesNoofUpdatesToHeader extends AbstractTagGroup
{

  protected string $id = 'DICOM:IndicatesNoofUpdatesToHeader';

  protected string $name = 'IndicatesNoofUpdatesToHeader';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Indicates Noof Updates To Header',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : DICOM::Main
       * line : 98820
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'DICOM::Main.DICOM:IndicatesNoofUpdatesToHeader',
      'desc' => [
        'en' => 'Indicates Noof Updates To Header',
      ],
    ],
  ];

}
