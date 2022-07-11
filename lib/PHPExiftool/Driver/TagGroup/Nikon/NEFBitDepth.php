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
class NEFBitDepth extends AbstractTagGroup
{

  protected string $id = 'Nikon:NEFBitDepth';

  protected string $name = 'NEFBitDepth';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'NEF Bit Depth',
  ];

  protected int $count = 4;

  protected int $flags = 20;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::Main
       * line : 199961
       * type : int16u
       * writable : true
       * count : 4
       * flags : Permanent,Unsafe
       */
      'id' => 'Nikon::Main.Nikon:NEFBitDepth',
      'desc' => [
        'en' => 'NEF Bit Depth',
      ],
    ],
  ];

}
