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
class StreamMimeLen extends AbstractTagGroup
{

  protected string $id = 'Real-MDPR:StreamMimeLen';

  protected string $name = 'StreamMimeLen';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Stream Mime Len',
  ];

  protected int $count = 0;

  protected int $flags = 32;

  protected array $tags = [
    0 => [
      /**
       * table_name : Real::MediaProps
       * line : 330752
       * type : int8u
       * writable : false
       * count : 
       * flags : Unknown
       */
      'id' => 'Real::MediaProps.Real-MDPR:StreamMimeLen',
      'desc' => [
        'en' => 'Stream Mime Len',
      ],
    ],
  ];

}
