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
class UnknownBlock extends AbstractTagGroup
{

  protected string $id = 'Leica:UnknownBlock';

  protected string $name = 'UnknownBlock';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Unknown Block',
  ];

  protected int $count = 0;

  protected int $flags = 38;

  protected array $tags = [
    0 => [
      /**
       * table_name : Panasonic::Leica6
       * line : 275268
       * type : ?
       * writable : false
       * count : 
       * flags : Binary,Permanent,Unknown
       */
      'id' => 'Panasonic::Leica6.Leica:UnknownBlock',
      'desc' => [
        'en' => 'Unknown Block',
      ],
    ],
  ];

}
