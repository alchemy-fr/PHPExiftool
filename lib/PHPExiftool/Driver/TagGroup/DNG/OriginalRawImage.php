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
class OriginalRawImage extends AbstractTagGroup
{

  protected string $id = 'DNG:OriginalRawImage';

  protected string $name = 'OriginalRawImage';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Original Raw Image',
  ];

  protected int $count = 0;

  protected int $flags = 2;

  protected array $tags = [
    0 => [
      /**
       * table_name : DNG::OriginalRaw
       * line : 105599
       * type : ?
       * writable : false
       * count : 
       * flags : Binary
       */
      'id' => 'DNG::OriginalRaw.DNG:OriginalRawImage',
      'desc' => [
        'en' => 'Original Raw Image',
      ],
    ],
  ];

}
