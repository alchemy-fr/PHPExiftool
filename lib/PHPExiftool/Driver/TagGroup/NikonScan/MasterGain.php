<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\NikonScan;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MasterGain extends AbstractTagGroup
{

  protected string $id = 'NikonScan:MasterGain';

  protected string $name = 'MasterGain';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Master Gain',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::Scan
       * line : 205579
       * type : rational64s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::Scan.NikonScan:MasterGain',
      'desc' => [
        'en' => 'Master Gain',
      ],
    ],
  ];

}
