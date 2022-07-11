<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\PDF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class EmbeddedImage extends AbstractTagGroup
{

  protected string $id = 'PDF:EmbeddedImage';

  protected string $name = 'EmbeddedImage';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Embedded Image',
  ];

  protected int $count = 0;

  protected int $flags = 2;

  protected array $tags = [
    0 => [
      /**
       * table_name : PDF::Im
       * line : 264473
       * type : ?
       * writable : false
       * count : 
       * flags : Binary
       */
      'id' => 'PDF::Im.PDF:EmbeddedImage',
      'desc' => [
        'en' => 'Embedded Image',
      ],
    ],
  ];

}
