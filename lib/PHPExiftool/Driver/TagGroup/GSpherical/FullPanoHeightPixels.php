<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\GSpherical;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FullPanoHeightPixels extends AbstractTagGroup
{

  protected string $id = 'GSpherical:FullPanoHeightPixels';

  protected string $name = 'FullPanoHeightPixels';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Full Pano Height Pixels',
  ];

  protected int $count = 0;

  protected int $flags = 1;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::GSpherical
       * line : 397553
       * type : integer
       * writable : true
       * count : 
       * flags : Avoid
       */
      'id' => 'XMP::GSpherical.GSpherical:FullPanoHeightPixels',
      'desc' => [
        'en' => 'Full Pano Height Pixels',
      ],
    ],
  ];

}
