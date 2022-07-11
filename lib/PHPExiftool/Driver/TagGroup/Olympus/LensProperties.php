<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Olympus;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class LensProperties extends AbstractTagGroup
{

  protected string $id = 'Olympus:LensProperties';

  protected string $name = 'LensProperties';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Lens Properties',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Olympus::Equipment
       * line : 254856
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Olympus::Equipment.Olympus:LensProperties',
      'desc' => [
        'en' => 'Lens Properties',
      ],
    ],
  ];

}
