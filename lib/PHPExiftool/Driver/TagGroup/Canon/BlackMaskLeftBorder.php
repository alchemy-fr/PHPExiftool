<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Canon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class BlackMaskLeftBorder extends AbstractTagGroup
{

  protected string $id = 'Canon:BlackMaskLeftBorder';

  protected string $name = 'BlackMaskLeftBorder';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Black Mask Left Border',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::SensorInfo
       * line : 70101
       * type : int16s
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::SensorInfo.Canon:BlackMaskLeftBorder',
      'desc' => [
        'en' => 'Black Mask Left Border',
      ],
    ],
  ];

}
