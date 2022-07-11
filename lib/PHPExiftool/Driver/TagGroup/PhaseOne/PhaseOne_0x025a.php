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
class PhaseOne_0x025a extends AbstractTagGroup
{

  protected string $id = 'PhaseOne:PhaseOne_0x025a';

  protected string $name = 'PhaseOne_0x025a';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Phase One 0x025a',
  ];

  protected int $count = 0;

  protected int $flags = 36;

  protected array $tags = [
    0 => [
      /**
       * table_name : PhaseOne::Main
       * line : 303795
       * type : int16s
       * writable : false
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'PhaseOne::Main.PhaseOne:PhaseOne_0x025a',
      'desc' => [
        'en' => 'Phase One 0x025a',
      ],
    ],
  ];

}
