<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Real_RA3;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Artist extends AbstractTagGroup
{

  protected string $id = 'Real-RA3:Artist';

  protected string $name = 'Artist';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Artist',
    'fr' => 'Artiste',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Real::AudioV3
       * line : 330027
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Real::AudioV3.Real-RA3:Artist',
      'desc' => [
        'en' => 'Artist',
        'fr' => 'Artiste',
      ],
    ],
  ];

}
