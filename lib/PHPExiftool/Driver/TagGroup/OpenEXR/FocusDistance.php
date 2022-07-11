<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\OpenEXR;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FocusDistance extends AbstractTagGroup
{

  protected string $id = 'OpenEXR:FocusDistance';

  protected string $name = 'FocusDistance';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Focus Distance',
    'fr' => 'Distance de mise au point',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : OpenEXR::Main
       * line : 263896
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'OpenEXR::Main.OpenEXR:FocusDistance',
      'desc' => [
        'en' => 'Focus Distance',
        'fr' => 'Distance de mise au point',
      ],
    ],
  ];

}
