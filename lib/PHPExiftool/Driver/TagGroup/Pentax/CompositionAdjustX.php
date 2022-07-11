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
class CompositionAdjustX extends AbstractTagGroup
{

  protected string $id = 'Pentax:CompositionAdjustX';

  protected string $name = 'CompositionAdjustX';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Composition Adjust X',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Pentax::LevelInfo
       * line : 294843
       * type : int8s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Pentax::LevelInfo.Pentax:CompositionAdjustX',
      'desc' => [
        'en' => 'Composition Adjust X',
      ],
    ],
  ];

}
