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
class File1MD5Sum extends AbstractTagGroup
{

  protected string $id = 'Torrent:File1MD5Sum';

  protected string $name = 'File1MD5Sum';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'File 1 MD5 Sum',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Torrent::Files
       * line : 395296
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Torrent::Files.Torrent:File1MD5Sum',
      'desc' => [
        'en' => 'File 1 MD5 Sum',
      ],
    ],
  ];

}
