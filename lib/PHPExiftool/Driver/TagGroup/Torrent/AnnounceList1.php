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
class AnnounceList1 extends AbstractTagGroup
{

  protected string $id = 'Torrent:AnnounceList1';

  protected string $name = 'AnnounceList1';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Announce List 1',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Torrent::Main
       * line : 395362
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Torrent::Main.Torrent:AnnounceList1',
      'desc' => [
        'en' => 'Announce List 1',
      ],
    ],
  ];

}
