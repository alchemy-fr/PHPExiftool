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
class FocusDistance extends AbstractTagGroup
{

  protected string $id = 'MIE-Lens:FocusDistance';

  protected string $name = 'FocusDistance';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Focus Distance',
    'fr' => 'Distance de mise au point',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MIE::Lens
       * line : 164274
       * type : rational64u
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'MIE::Lens.MIE-Lens:FocusDistance',
      'desc' => [
        'en' => 'Focus Distance',
        'fr' => 'Distance de mise au point',
      ],
    ],
  ];

}
