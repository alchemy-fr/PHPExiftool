<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\GIF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ColorResolutionDepth extends AbstractTagGroup
{

  protected string $id = 'GIF:ColorResolutionDepth';

  protected string $name = 'ColorResolutionDepth';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Color Resolution Depth',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : GIF::Screen
       * line : 131765
       * type : int8u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'GIF::Screen.GIF:ColorResolutionDepth',
      'desc' => [
        'en' => 'Color Resolution Depth',
      ],
    ],
  ];

}
