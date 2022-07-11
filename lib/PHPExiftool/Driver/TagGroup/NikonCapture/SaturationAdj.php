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
class SaturationAdj extends AbstractTagGroup
{

  protected string $id = 'NikonCapture:SaturationAdj';

  protected string $name = 'SaturationAdj';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Saturation Adj',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : NikonCapture::HighlightData
       * line : 210744
       * type : int8s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCapture::HighlightData.NikonCapture:SaturationAdj',
      'desc' => [
        'en' => 'Saturation Adj',
      ],
    ],
    1 => [
      /**
       * table_name : NikonCapture::PictureCtrl
       * line : 211586
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCapture::PictureCtrl.NikonCapture:SaturationAdj',
      'desc' => [
        'en' => 'Saturation Adj',
      ],
    ],
  ];

}
