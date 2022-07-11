<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\NikonCapture;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class BrightnessAdj extends AbstractTagGroup
{

  protected string $id = 'NikonCapture:BrightnessAdj';

  protected string $name = 'BrightnessAdj';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Brightness Adj',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : NikonCapture::Brightness
       * line : 210474
       * type : double
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCapture::Brightness.NikonCapture:BrightnessAdj',
      'desc' => [
        'en' => 'Brightness Adj',
      ],
    ],
    1 => [
      /**
       * table_name : NikonCapture::PictureCtrl
       * line : 211581
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCapture::PictureCtrl.NikonCapture:BrightnessAdj',
      'desc' => [
        'en' => 'Brightness Adj',
      ],
    ],
  ];

}
