<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\PICT;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class BitsRect extends AbstractTagGroup
{

  protected string $id = 'PICT:BitsRect';

  protected string $name = 'BitsRect';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'CopyBits with Clipped Rectangle',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : PICT::Main
       * line : 265332
       * type : BitsRect#
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'PICT::Main.PICT:BitsRect',
      'desc' => [
        'en' => 'CopyBits with Clipped Rectangle',
      ],
    ],
  ];

}
