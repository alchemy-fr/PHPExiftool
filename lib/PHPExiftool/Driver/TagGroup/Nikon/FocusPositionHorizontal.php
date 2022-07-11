<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FocusPositionHorizontal extends AbstractTagGroup
{

  protected string $id = 'Nikon:FocusPositionHorizontal';

  protected string $name = 'FocusPositionHorizontal';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Focus Position Horizontal',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::AFInfo2V0400
       * line : 191381
       * type : int8u
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::AFInfo2V0400.Nikon:FocusPositionHorizontal',
      'desc' => [
        'en' => 'Focus Position Horizontal',
      ],
    ],
  ];

}
