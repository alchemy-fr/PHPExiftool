<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Composite;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class GPSPosition extends AbstractTagGroup
{

  protected string $id = 'Composite:GPSPosition';

  protected string $name = 'GPSPosition';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'GPS Position',
    'fr' => 'Position GPS',
  ];

  protected int $count = 0;

  protected int $flags = 16;

  protected array $tags = [
    0 => [
      /**
       * table_name : Composite
       * line : 90364
       * type : ?
       * writable : true
       * count : 
       * flags : Unsafe
       */
      'id' => 'Composite.Composite:GPSPosition',
      'desc' => [
        'en' => 'GPS Position',
        'fr' => 'Position GPS',
      ],
    ],
  ];

}
