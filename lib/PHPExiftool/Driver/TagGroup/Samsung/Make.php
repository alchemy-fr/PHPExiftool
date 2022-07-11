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
class Make extends AbstractTagGroup
{

  protected string $id = 'Samsung:Make';

  protected string $name = 'Make';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Make',
    'fr' => 'Fabricant',
  ];

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Samsung::MP4
       * line : 334244
       * type : string
       * writable : false
       * count : 24
       * flags : Permanent
       */
      'id' => 'Samsung::MP4.Samsung:Make',
      'desc' => [
        'en' => 'Make',
        'fr' => 'Fabricant',
      ],
    ],
    1 => [
      /**
       * table_name : Samsung::sec
       * line : 335986
       * type : string
       * writable : false
       * count : 32
       * flags : Permanent
       */
      'id' => 'Samsung::sec.Samsung:Make',
      'desc' => [
        'en' => 'Make',
        'fr' => 'Fabricant',
      ],
    ],
  ];

}
