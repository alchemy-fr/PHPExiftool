<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Pentax;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CompositionAdjust extends AbstractTagGroup
{

  protected string $id = 'Pentax:CompositionAdjust';

  protected string $name = 'CompositionAdjust';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Composition Adjust',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Pentax::LevelInfo
       * line : 294817
       * type : int8s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Pentax::LevelInfo.Pentax:CompositionAdjust',
      'desc' => [
        'en' => 'Composition Adjust',
      ],
    ],
  ];

}
