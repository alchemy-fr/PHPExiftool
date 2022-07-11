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
class FontFamily extends AbstractTagGroup
{

  protected string $id = 'Font:FontFamily';

  protected string $name = 'FontFamily';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Font Family',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Font::AFM
       * line : 128105
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Font::AFM.Font:FontFamily',
      'desc' => [
        'en' => 'Font Family',
      ],
    ],
    1 => [
      /**
       * table_name : Font::Name
       * line : 128197
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Font::Name.Font:FontFamily',
      'desc' => [
        'en' => 'Font Family',
      ],
    ],
    2 => [
      /**
       * table_name : Font::PSInfo
       * line : 128477
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Font::PSInfo.Font:FontFamily',
      'desc' => [
        'en' => 'Font Family',
      ],
    ],
  ];

}
