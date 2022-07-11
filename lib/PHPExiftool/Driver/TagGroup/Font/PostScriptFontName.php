<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Font;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PostScriptFontName extends AbstractTagGroup
{

  protected string $id = 'Font:PostScriptFontName';

  protected string $name = 'PostScriptFontName';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'PostScript Font Name',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Font::Main
       * line : 128168
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Font::Main.Font:PostScriptFontName',
      'desc' => [
        'en' => 'PostScript Font Name',
      ],
    ],
    1 => [
      /**
       * table_name : Font::Name
       * line : 128221
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Font::Name.Font:PostScriptFontName',
      'desc' => [
        'en' => 'PostScript Font Name',
      ],
    ],
    2 => [
      /**
       * table_name : Font::Name
       * line : 128287
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Font::Name.Font:PostScriptFontName',
      'desc' => [
        'en' => 'PostScript Font Name',
      ],
    ],
  ];

}
