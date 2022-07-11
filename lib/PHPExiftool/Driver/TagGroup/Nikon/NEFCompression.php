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
class NEFCompression extends AbstractTagGroup
{

  protected string $id = 'Nikon:NEFCompression';

  protected string $name = 'NEFCompression';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'NEF Compression',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::Main
       * line : 197756
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::Main.Nikon:NEFCompression',
      'desc' => [
        'en' => 'NEF Compression',
      ],
    ],
    1 => [
      /**
       * table_name : Nikon::MakerNotes0x51
       * line : 199996
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::MakerNotes0x51.Nikon:NEFCompression',
      'desc' => [
        'en' => 'NEF Compression',
      ],
    ],
  ];

}
