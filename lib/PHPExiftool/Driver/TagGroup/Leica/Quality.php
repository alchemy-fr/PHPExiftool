<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Leica;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Quality extends AbstractTagGroup
{

  protected string $id = 'Leica:Quality';

  protected string $name = 'Quality';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Quality',
    'fr' => 'Qualité',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Panasonic::Leica2
       * line : 274623
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Panasonic::Leica2.Leica:Quality',
      'desc' => [
        'en' => 'Quality',
        'fr' => 'Qualité',
      ],
    ],
  ];

}
