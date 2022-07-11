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
class WB_RGBLevelsFlash extends AbstractTagGroup
{

  protected string $id = 'KodakIFD:WB_RGBLevelsFlash';

  protected string $name = 'WB_RGBLevelsFlash';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'WB RGB Levels Flash',
    'fr' => 'Niveaux BB RVB flash',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Kodak::IFD
       * line : 155570
       * type : ?
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Kodak::IFD.KodakIFD:WB_RGBLevelsFlash',
      'desc' => [
        'en' => 'WB RGB Levels Flash',
        'fr' => 'Niveaux BB RVB flash',
      ],
    ],
  ];

}
