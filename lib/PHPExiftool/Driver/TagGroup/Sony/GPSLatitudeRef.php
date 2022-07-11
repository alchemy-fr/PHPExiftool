<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Sony;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class GPSLatitudeRef extends AbstractTagGroup
{

  protected string $id = 'Sony:GPSLatitudeRef';

  protected string $name = 'GPSLatitudeRef';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'GPS Latitude Ref',
    'fr' => 'Latitude nord ou sud',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::rtmd
       * line : 393867
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Sony::rtmd.Sony:GPSLatitudeRef',
      'desc' => [
        'en' => 'GPS Latitude Ref',
        'fr' => 'Latitude nord ou sud',
      ],
    ],
  ];

}
