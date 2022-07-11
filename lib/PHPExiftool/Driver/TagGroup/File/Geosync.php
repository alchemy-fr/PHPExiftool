<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\File;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Geosync extends AbstractTagGroup
{

  protected string $id = 'File:Geosync';

  protected string $name = 'Geosync';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Geosync',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Extra
       * line : 121717
       * type : ?
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'Extra.File:Geosync',
      'desc' => [
        'en' => 'Geosync',
      ],
    ],
  ];

}
