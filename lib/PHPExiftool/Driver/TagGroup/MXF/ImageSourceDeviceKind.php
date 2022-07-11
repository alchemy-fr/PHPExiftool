<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MXF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ImageSourceDeviceKind extends AbstractTagGroup
{

  protected string $id = 'MXF:ImageSourceDeviceKind';

  protected string $name = 'ImageSourceDeviceKind';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Image Source Device Kind',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 168435
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:ImageSourceDeviceKind',
      'desc' => [
        'en' => 'Image Source Device Kind',
      ],
    ],
    1 => [
      /**
       * table_name : MXF::Main
       * line : 172430
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:ImageSourceDeviceKind',
      'desc' => [
        'en' => 'Image Source Device Kind',
      ],
    ],
  ];

}
