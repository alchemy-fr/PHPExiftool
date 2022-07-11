<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\ExifTool;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Now extends AbstractTagGroup
{

  protected string $id = 'ExifTool:Now';

  protected string $name = 'Now';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Now',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Extra
       * line : 121817
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Extra.ExifTool:Now',
      'desc' => [
        'en' => 'Now',
      ],
    ],
  ];

}
