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
class Creator extends AbstractTagGroup
{

  protected string $id = 'Torrent:Creator';

  protected string $name = 'Creator';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Creator',
    'fr' => 'Créateur',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Torrent::Main
       * line : 395384
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Torrent::Main.Torrent:Creator',
      'desc' => [
        'en' => 'Creator',
        'fr' => 'Créateur',
      ],
    ],
  ];

}
