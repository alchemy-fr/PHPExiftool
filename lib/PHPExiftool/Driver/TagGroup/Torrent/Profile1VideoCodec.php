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
class Profile1VideoCodec extends AbstractTagGroup
{

  protected string $id = 'Torrent:Profile1VideoCodec';

  protected string $name = 'Profile1VideoCodec';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Profile 1 Video Codec',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Torrent::Profiles
       * line : 395434
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Torrent::Profiles.Torrent:Profile1VideoCodec',
      'desc' => [
        'en' => 'Profile 1 Video Codec',
      ],
    ],
  ];

}
