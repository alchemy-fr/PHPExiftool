<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Torrent;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Private0 extends AbstractTagGroup
{

  protected string $id = 'Torrent:Private';

  protected string $name = 'Private';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Private',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Torrent::Info
       * line : 395349
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Torrent::Info.Torrent:Private',
      'desc' => [
        'en' => 'Private',
      ],
    ],
  ];

}
