<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Real_MDPR;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PhysicalStreams extends AbstractTagGroup
{

  protected string $id = 'Real-MDPR:PhysicalStreams';

  protected string $name = 'PhysicalStreams';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Physical Streams',
  ];

  protected int $count = 0;

  protected int $flags = 32;

  protected array $tags = [
    0 => [
      /**
       * table_name : Real::MediaProps
       * line : 330777
       * type : int16u
       * writable : false
       * count : 
       * flags : Unknown
       */
      'id' => 'Real::MediaProps.Real-MDPR:PhysicalStreams',
      'desc' => [
        'en' => 'Physical Streams',
      ],
    ],
  ];

}
