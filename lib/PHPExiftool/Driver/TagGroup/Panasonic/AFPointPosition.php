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
class AFPointPosition extends AbstractTagGroup
{

  protected string $id = 'Panasonic:AFPointPosition';

  protected string $name = 'AFPointPosition';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'AF Point Position',
  ];

  protected int $count = 2;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Panasonic::Main
       * line : 277566
       * type : rational64u
       * writable : true
       * count : 2
       * flags : Permanent
       */
      'id' => 'Panasonic::Main.Panasonic:AFPointPosition',
      'desc' => [
        'en' => 'AF Point Position',
      ],
    ],
  ];

}
