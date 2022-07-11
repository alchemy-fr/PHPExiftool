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
class ClearRetouchValue extends AbstractTagGroup
{

  protected string $id = 'Panasonic:ClearRetouchValue';

  protected string $name = 'ClearRetouchValue';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Clear Retouch Value',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Panasonic::Main
       * line : 278201
       * type : rational64u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Panasonic::Main.Panasonic:ClearRetouchValue',
      'desc' => [
        'en' => 'Clear Retouch Value',
      ],
    ],
  ];

}
