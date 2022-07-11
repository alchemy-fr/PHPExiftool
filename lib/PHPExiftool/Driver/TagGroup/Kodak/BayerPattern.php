<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Kodak;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class BayerPattern extends AbstractTagGroup
{

  protected string $id = 'Kodak:BayerPattern';

  protected string $name = 'BayerPattern';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Bayer Pattern',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Kodak::CameraInfo
       * line : 154703
       * type : string
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Kodak::CameraInfo.Kodak:BayerPattern',
      'desc' => [
        'en' => 'Bayer Pattern',
      ],
    ],
  ];

}
