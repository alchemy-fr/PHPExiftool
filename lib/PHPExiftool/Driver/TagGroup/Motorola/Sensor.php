<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Motorola;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Sensor extends AbstractTagGroup
{

  protected string $id = 'Motorola:Sensor';

  protected string $name = 'Sensor';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Sensor',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Motorola::Main
       * line : 188188
       * type : string
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Motorola::Main.Motorola:Sensor',
      'desc' => [
        'en' => 'Sensor',
      ],
    ],
  ];

}
