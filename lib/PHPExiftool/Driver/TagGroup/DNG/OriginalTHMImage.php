<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\DNG;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class OriginalTHMImage extends AbstractTagGroup
{

  protected string $id = 'DNG:OriginalTHMImage';

  protected string $name = 'OriginalTHMImage';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Original THM Image',
  ];

  protected int $count = 0;

  protected int $flags = 2;

  protected array $tags = [
    0 => [
      /**
       * table_name : DNG::OriginalRaw
       * line : 105615
       * type : ?
       * writable : false
       * count : 
       * flags : Binary
       */
      'id' => 'DNG::OriginalRaw.DNG:OriginalTHMImage',
      'desc' => [
        'en' => 'Original THM Image',
      ],
    ],
  ];

}
