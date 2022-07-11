<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\SR2SubIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MaxApertureAtMaxFocal extends AbstractTagGroup
{

  protected string $id = 'SR2SubIFD:MaxApertureAtMaxFocal';

  protected string $name = 'MaxApertureAtMaxFocal';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Max Aperture At Max Focal',
    'fr' => 'Ouverture à la focale maxi',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::SR2SubIFD
       * line : 362100
       * type : ?
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::SR2SubIFD.SR2SubIFD:MaxApertureAtMaxFocal',
      'desc' => [
        'en' => 'Max Aperture At Max Focal',
        'fr' => 'Ouverture à la focale maxi',
      ],
    ],
  ];

}
