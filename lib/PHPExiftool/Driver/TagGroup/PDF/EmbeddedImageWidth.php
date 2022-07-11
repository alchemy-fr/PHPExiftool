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
class EmbeddedImageWidth extends AbstractTagGroup
{

  protected string $id = 'PDF:EmbeddedImageWidth';

  protected string $name = 'EmbeddedImageWidth';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Embedded Image Width',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : PDF::Im
       * line : 264478
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'PDF::Im.PDF:EmbeddedImageWidth',
      'desc' => [
        'en' => 'Embedded Image Width',
      ],
    ],
  ];

}
