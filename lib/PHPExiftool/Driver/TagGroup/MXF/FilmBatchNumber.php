<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MXF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FilmBatchNumber extends AbstractTagGroup
{

  protected string $id = 'MXF:FilmBatchNumber';

  protected string $name = 'FilmBatchNumber';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Film Batch Number',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 169534
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:FilmBatchNumber',
      'desc' => [
        'en' => 'Film Batch Number',
      ],
    ],
    1 => [
      /**
       * table_name : MXF::Main
       * line : 169537
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:FilmBatchNumber',
      'desc' => [
        'en' => 'Film Batch Number',
      ],
    ],
  ];

}
