<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MPEG;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Encoder extends AbstractTagGroup
{

  protected string $id = 'MPEG:Encoder';

  protected string $name = 'Encoder';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Encoder',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MPEG::Xing
       * line : 166480
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MPEG::Xing.MPEG:Encoder',
      'desc' => [
        'en' => 'Encoder',
      ],
    ],
  ];

}
