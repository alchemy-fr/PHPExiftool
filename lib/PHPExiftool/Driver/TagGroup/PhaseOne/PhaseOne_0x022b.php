<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\PhaseOne;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PhaseOne_0x022b extends AbstractTagGroup
{

  protected string $id = 'PhaseOne:PhaseOne_0x022b';

  protected string $name = 'PhaseOne_0x022b';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Phase One 0x022b',
  ];

  protected int $count = 0;

  protected int $flags = 36;

  protected array $tags = [
    0 => [
      /**
       * table_name : PhaseOne::Main
       * line : 303789
       * type : float
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'PhaseOne::Main.PhaseOne:PhaseOne_0x022b',
      'desc' => [
        'en' => 'Phase One 0x022b',
      ],
    ],
  ];

}
