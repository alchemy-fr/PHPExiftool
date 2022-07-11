<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\CBOR;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ThumbnailURL extends AbstractTagGroup
{

  protected string $id = 'CBOR:ThumbnailURL';

  protected string $name = 'ThumbnailURL';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Thumbnail URL',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : CBOR::Main
       * line : 3779
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'CBOR::Main.CBOR:ThumbnailURL',
      'desc' => [
        'en' => 'Thumbnail URL',
      ],
    ],
  ];

}
