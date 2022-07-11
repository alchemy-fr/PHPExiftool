<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\PanasonicRaw;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class DistortionN extends AbstractTagGroup
{

  protected string $id = 'PanasonicRaw:DistortionN';

  protected string $name = 'DistortionN';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Distortion N',
  ];

  protected int $count = 0;

  protected int $flags = 32;

  protected array $tags = [
    0 => [
      /**
       * table_name : PanasonicRaw::DistortionInfo
       * line : 280543
       * type : int16s
       * writable : true
       * count : 
       * flags : Unknown
       */
      'id' => 'PanasonicRaw::DistortionInfo.PanasonicRaw:DistortionN',
      'desc' => [
        'en' => 'Distortion N',
      ],
    ],
  ];

}
