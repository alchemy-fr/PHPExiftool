<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Minolta;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MinoltaCameraSettings2 extends AbstractTagGroup
{

  protected string $id = 'Minolta:MinoltaCameraSettings2';

  protected string $name = 'MinoltaCameraSettings2';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Minolta Camera Settings 2',
  ];

  protected int $count = 0;

  protected int $flags = 6;

  protected array $tags = [
    0 => [
      /**
       * table_name : Minolta::Main
       * line : 185331
       * type : ?
       * writable : true
       * count : 
       * flags : Binary,Permanent
       */
      'id' => 'Minolta::Main.Minolta:MinoltaCameraSettings2',
      'desc' => [
        'en' => 'Minolta Camera Settings 2',
      ],
    ],
  ];

}
