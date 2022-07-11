<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MIE_Lens;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MaxApertureAtMaxFocal extends AbstractTagGroup
{

  protected string $id = 'MIE-Lens:MaxApertureAtMaxFocal';

  protected string $name = 'MaxApertureAtMaxFocal';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Max Aperture At Max Focal',
    'fr' => 'Ouverture à la focale maxi',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MIE::Lens
       * line : 164310
       * type : rational64u
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'MIE::Lens.MIE-Lens:MaxApertureAtMaxFocal',
      'desc' => [
        'en' => 'Max Aperture At Max Focal',
        'fr' => 'Ouverture à la focale maxi',
      ],
    ],
  ];

}
