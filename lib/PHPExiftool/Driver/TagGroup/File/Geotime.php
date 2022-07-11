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
class Geotime extends AbstractTagGroup
{

  protected string $id = 'File:Geotime';

  protected string $name = 'Geotime';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Geotime',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Extra
       * line : 121725
       * type : ?
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'Extra.File:Geotime',
      'desc' => [
        'en' => 'Geotime',
      ],
    ],
  ];

}
