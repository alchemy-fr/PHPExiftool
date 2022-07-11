<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\CanonCustom;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class LCDPanels extends AbstractTagGroup
{

  protected string $id = 'CanonCustom:LCDPanels';

  protected string $name = 'LCDPanels';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Top/Back LCD Panels',
    'fr' => 'Ecran LCD supérieur/arrière',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : CanonCustom::Functions1D
       * line : 72047
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'CanonCustom::Functions1D.CanonCustom:LCDPanels',
      'desc' => [
        'en' => 'Top/Back LCD Panels',
        'fr' => 'Ecran LCD supérieur/arrière',
      ],
    ],
  ];

}
