<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_dwc;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class DateIdentified extends AbstractTagGroup
{

  protected string $id = 'XMP-dwc:DateIdentified';

  protected string $name = 'DateIdentified';

  protected ?string $phpType = 'date';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Date Identified',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : DarwinCore::Main
       * line : 106660
       * type : date
       * writable : true
       * count : 
       * flags : Flattened
       */
      'id' => 'DarwinCore::Main.XMP-dwc:DateIdentified',
      'desc' => [
        'en' => 'Date Identified',
      ],
    ],
  ];

}
