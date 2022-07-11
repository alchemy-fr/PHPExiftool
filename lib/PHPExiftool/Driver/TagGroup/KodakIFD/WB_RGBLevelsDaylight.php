<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\KodakIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class WB_RGBLevelsDaylight extends AbstractTagGroup
{

  protected string $id = 'KodakIFD:WB_RGBLevelsDaylight';

  protected string $name = 'WB_RGBLevelsDaylight';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'WB RGB Levels Daylight',
    'fr' => 'Niveaux BB RVB lumière jour',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Kodak::IFD
       * line : 155552
       * type : ?
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Kodak::IFD.KodakIFD:WB_RGBLevelsDaylight',
      'desc' => [
        'en' => 'WB RGB Levels Daylight',
        'fr' => 'Niveaux BB RVB lumière jour',
      ],
    ],
  ];

}
