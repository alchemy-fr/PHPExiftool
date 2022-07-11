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
class Unknown extends AbstractTagGroup
{

  protected string $id = 'Real-RA3:Unknown';

  protected string $name = 'Unknown';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Unknown',
    'fr' => 'Inconnu',
  ];

  protected int $count = 3;

  protected int $flags = 32;

  protected array $tags = [
    0 => [
      /**
       * table_name : Real::AudioV3
       * line : 329979
       * type : int16u
       * writable : false
       * count : 3
       * flags : Unknown
       */
      'id' => 'Real::AudioV3.Real-RA3:Unknown',
      'desc' => [
        'en' => 'Unknown',
        'fr' => 'Inconnu',
      ],
    ],
  ];

}
