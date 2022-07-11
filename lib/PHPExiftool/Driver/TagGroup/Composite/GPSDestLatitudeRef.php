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
class GPSDestLatitudeRef extends AbstractTagGroup
{

  protected string $id = 'Composite:GPSDestLatitudeRef';

  protected string $name = 'GPSDestLatitudeRef';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'GPS Dest Latitude Ref',
    'fr' => 'Référence de la latitude de destination',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Composite
       * line : 94677
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Composite.Composite:GPSDestLatitudeRef',
      'desc' => [
        'en' => 'GPS Dest Latitude Ref',
        'fr' => 'Référence de la latitude de destination',
      ],
    ],
  ];

}
