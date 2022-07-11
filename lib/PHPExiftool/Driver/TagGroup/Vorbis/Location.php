<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Vorbis;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Location extends AbstractTagGroup
{

  protected string $id = 'Vorbis:Location';

  protected string $name = 'Location';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Location',
    'fr' => 'Lieu',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Vorbis::Comments
       * line : 396168
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Vorbis::Comments.Vorbis:Location',
      'desc' => [
        'en' => 'Location',
        'fr' => 'Lieu',
      ],
    ],
  ];

}
