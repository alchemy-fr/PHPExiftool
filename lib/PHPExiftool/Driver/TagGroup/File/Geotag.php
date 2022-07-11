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
class Geotag extends AbstractTagGroup
{

  protected string $id = 'File:Geotag';

  protected string $name = 'Geotag';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Geotag',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Extra
       * line : 121721
       * type : ?
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'Extra.File:Geotag',
      'desc' => [
        'en' => 'Geotag',
      ],
    ],
  ];

}
