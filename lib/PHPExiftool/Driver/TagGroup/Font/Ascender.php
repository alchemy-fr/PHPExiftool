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
class Ascender extends AbstractTagGroup
{

  protected string $id = 'Font:Ascender';

  protected string $name = 'Ascender';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Ascender',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Font::AFM
       * line : 128050
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Font::AFM.Font:Ascender',
      'desc' => [
        'en' => 'Ascender',
      ],
    ],
  ];

}
