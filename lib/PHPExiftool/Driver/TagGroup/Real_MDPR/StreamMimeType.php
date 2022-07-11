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
class StreamMimeType extends AbstractTagGroup
{

  protected string $id = 'Real-MDPR:StreamMimeType';

  protected string $name = 'StreamMimeType';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Stream Mime Type',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Real::MediaProps
       * line : 330756
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Real::MediaProps.Real-MDPR:StreamMimeType',
      'desc' => [
        'en' => 'Stream Mime Type',
      ],
    ],
  ];

}
