<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Samsung;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SmartAlbumColor extends AbstractTagGroup
{

  protected string $id = 'Samsung:SmartAlbumColor';

  protected string $name = 'SmartAlbumColor';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Smart Album Color',
  ];

  protected int $count = 2;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Samsung::Type2
       * line : 335525
       * type : int16u
       * writable : true
       * count : 2
       * flags : Permanent
       */
      'id' => 'Samsung::Type2.Samsung:SmartAlbumColor',
      'desc' => [
        'en' => 'Smart Album Color',
      ],
    ],
    1 => [
      /**
       * table_name : Samsung::Type2
       * line : 335535
       * type : int16u
       * writable : true
       * count : 2
       * flags : Permanent
       */
      'id' => 'Samsung::Type2.Samsung:SmartAlbumColor',
      'desc' => [
        'en' => 'Smart Album Color',
      ],
    ],
  ];

}
