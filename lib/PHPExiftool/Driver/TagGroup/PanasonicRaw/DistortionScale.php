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
class DistortionScale extends AbstractTagGroup
{

  protected string $id = 'PanasonicRaw:DistortionScale';

  protected string $name = 'DistortionScale';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Distortion Scale',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : PanasonicRaw::DistortionInfo
       * line : 280497
       * type : int16s
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'PanasonicRaw::DistortionInfo.PanasonicRaw:DistortionScale',
      'desc' => [
        'en' => 'Distortion Scale',
      ],
    ],
  ];

}
