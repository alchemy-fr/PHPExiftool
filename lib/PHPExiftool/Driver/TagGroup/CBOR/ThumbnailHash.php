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
class ThumbnailHash extends AbstractTagGroup
{

  protected string $id = 'CBOR:ThumbnailHash';

  protected string $name = 'ThumbnailHash';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Thumbnail Hash',
  ];

  protected int $count = 0;

  protected int $flags = 64;

  protected array $tags = [
    0 => [
      /**
       * table_name : CBOR::Main
       * line : 3776
       * type : ?
       * writable : false
       * count : 
       * flags : List
       */
      'id' => 'CBOR::Main.CBOR:ThumbnailHash',
      'desc' => [
        'en' => 'Thumbnail Hash',
      ],
    ],
  ];

}
