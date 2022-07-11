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
class MIDISong extends AbstractTagGroup
{

  protected string $id = 'GIF:MIDISong';

  protected string $name = 'MIDISong';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'MIDI Song',
  ];

  protected int $count = 0;

  protected int $flags = 2;

  protected array $tags = [
    0 => [
      /**
       * table_name : GIF::Extensions
       * line : 131597
       * type : ?
       * writable : false
       * count : 
       * flags : Binary
       */
      'id' => 'GIF::Extensions.GIF:MIDISong',
      'desc' => [
        'en' => 'MIDI Song',
      ],
    ],
  ];

}
