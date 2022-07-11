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
class EmbeddedJPG extends AbstractTagGroup
{

  protected string $id = 'File:EmbeddedJPG';

  protected string $name = 'EmbeddedJPG';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Embedded JPG',
  ];

  protected int $count = 0;

  protected int $flags = 2;

  protected array $tags = [
    0 => [
      /**
       * table_name : BMP::Extra
       * line : 3165
       * type : ?
       * writable : false
       * count : 
       * flags : Binary
       */
      'id' => 'BMP::Extra.File:EmbeddedJPG',
      'desc' => [
        'en' => 'Embedded JPG',
      ],
    ],
  ];

}
