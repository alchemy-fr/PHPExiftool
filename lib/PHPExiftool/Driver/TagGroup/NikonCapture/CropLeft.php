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
class CropLeft extends AbstractTagGroup
{

  protected string $id = 'NikonCapture:CropLeft';

  protected string $name = 'CropLeft';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Crop Left',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : NikonCapture::CropData
       * line : 210539
       * type : double
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCapture::CropData.NikonCapture:CropLeft',
      'desc' => [
        'en' => 'Crop Left',
      ],
    ],
  ];

}
