<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Panasonic;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Gain extends AbstractTagGroup
{

  protected string $id = 'Panasonic:Gain';

  protected string $name = 'Gain';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Gain',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Panasonic::Type2
       * line : 280015
       * type : int16u
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Panasonic::Type2.Panasonic:Gain',
      'desc' => [
        'en' => 'Gain',
      ],
    ],
  ];

}
