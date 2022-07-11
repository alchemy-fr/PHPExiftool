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
class FilmFormatName extends AbstractTagGroup
{

  protected string $id = 'MXF:FilmFormatName';

  protected string $name = 'FilmFormatName';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Film Format Name',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 168417
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:FilmFormatName',
      'desc' => [
        'en' => 'Film Format Name',
      ],
    ],
    1 => [
      /**
       * table_name : MXF::Main
       * line : 169522
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:FilmFormatName',
      'desc' => [
        'en' => 'Film Format Name',
      ],
    ],
    2 => [
      /**
       * table_name : MXF::Main
       * line : 169525
       * type : ?
       * writable : false
       * count : 
       * flags : Unknown
       */
      'id' => 'MXF::Main.MXF:FilmFormatName',
      'desc' => [
        'en' => 'Film Format Name',
      ],
    ],
  ];

}
