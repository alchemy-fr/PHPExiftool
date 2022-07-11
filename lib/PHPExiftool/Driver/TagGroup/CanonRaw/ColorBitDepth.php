<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\CanonRaw;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ColorBitDepth extends AbstractTagGroup
{

  protected string $id = 'CanonRaw:ColorBitDepth';

  protected string $name = 'ColorBitDepth';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Color Bit Depth',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : CanonRaw::ImageInfo
       * line : 78627
       * type : int32u
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'CanonRaw::ImageInfo.CanonRaw:ColorBitDepth',
      'desc' => [
        'en' => 'Color Bit Depth',
      ],
    ],
  ];

}
