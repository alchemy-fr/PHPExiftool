<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\QuickTime;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PixelAspectRatio extends AbstractTagGroup
{

  protected string $id = 'QuickTime:PixelAspectRatio';

  protected string $name = 'PixelAspectRatio';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Pixel Aspect Ratio',
  ];

  protected int $count = 2;

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::ImageDesc
       * line : 314368
       * type : int16u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'QuickTime::ImageDesc.QuickTime:PixelAspectRatio',
      'desc' => [
        'en' => 'Pixel Aspect Ratio',
      ],
    ],
    1 => [
      /**
       * table_name : QuickTime::ItemPropCont
       * line : 323567
       * type : int32u
       * writable : true
       * count : 
       * flags : Unsafe
       */
      'id' => 'QuickTime::ItemPropCont.QuickTime:PixelAspectRatio',
      'desc' => [
        'en' => 'Pixel Aspect Ratio',
      ],
    ],
    2 => [
      /**
       * table_name : QuickTime::VideoProf
       * line : 326628
       * type : int16u
       * writable : false
       * count : 2
       * flags : 
       */
      'id' => 'QuickTime::VideoProf.QuickTime:PixelAspectRatio',
      'desc' => [
        'en' => 'Pixel Aspect Ratio',
      ],
    ],
  ];

}
