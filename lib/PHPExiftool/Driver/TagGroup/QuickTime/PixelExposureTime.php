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
class PixelExposureTime extends AbstractTagGroup
{

  protected string $id = 'QuickTime:PixelExposureTime';

  protected string $name = 'PixelExposureTime';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Pixel Exposure Time',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::camm1
       * line : 326662
       * type : int32s
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'QuickTime::camm1.QuickTime:PixelExposureTime',
      'desc' => [
        'en' => 'Pixel Exposure Time',
      ],
    ],
  ];

}
