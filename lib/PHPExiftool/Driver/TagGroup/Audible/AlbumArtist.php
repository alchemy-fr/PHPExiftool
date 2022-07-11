<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Audible;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AlbumArtist extends AbstractTagGroup
{

  protected string $id = 'Audible:AlbumArtist';

  protected string $name = 'AlbumArtist';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Album Artist',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Audible::meta
       * line : 3049
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Audible::meta.Audible:AlbumArtist',
      'desc' => [
        'en' => 'Album Artist',
      ],
    ],
  ];

}
