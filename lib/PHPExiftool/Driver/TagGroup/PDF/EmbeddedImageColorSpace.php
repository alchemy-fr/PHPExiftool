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
class EmbeddedImageColorSpace extends AbstractTagGroup
{

  protected string $id = 'PDF:EmbeddedImageColorSpace';

  protected string $name = 'EmbeddedImageColorSpace';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Embedded Image Color Space',
  ];

  protected int $count = 0;

  protected int $flags = 64;

  protected array $tags = [
    0 => [
      /**
       * table_name : PDF::Im
       * line : 264458
       * type : ?
       * writable : false
       * count : 
       * flags : List
       */
      'id' => 'PDF::Im.PDF:EmbeddedImageColorSpace',
      'desc' => [
        'en' => 'Embedded Image Color Space',
      ],
    ],
  ];

}
