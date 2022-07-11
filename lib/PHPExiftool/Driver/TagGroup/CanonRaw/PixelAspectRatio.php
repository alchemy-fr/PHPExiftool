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
class PixelAspectRatio extends AbstractTagGroup
{

  protected string $id = 'CanonRaw:PixelAspectRatio';

  protected string $name = 'PixelAspectRatio';

  protected ?string $phpType = 'float';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Pixel Aspect Ratio',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : CanonRaw::ImageInfo
       * line : 78607
       * type : float
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'CanonRaw::ImageInfo.CanonRaw:PixelAspectRatio',
      'desc' => [
        'en' => 'Pixel Aspect Ratio',
      ],
    ],
  ];

}
