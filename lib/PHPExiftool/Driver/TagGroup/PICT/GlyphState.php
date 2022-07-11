<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\PICT;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class GlyphState extends AbstractTagGroup
{

  protected string $id = 'PICT:GlyphState';

  protected string $name = 'GlyphState';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Glyph State',
  ];

  protected int $count = 8;

  protected array $tags = [
    0 => [
      /**
       * table_name : PICT::Main
       * line : 265097
       * type : int8u
       * writable : false
       * count : 8
       * flags : 
       */
      'id' => 'PICT::Main.PICT:GlyphState',
      'desc' => [
        'en' => 'Glyph State',
      ],
    ],
  ];

}
