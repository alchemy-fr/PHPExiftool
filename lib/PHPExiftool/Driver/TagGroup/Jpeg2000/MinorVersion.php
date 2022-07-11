<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Jpeg2000;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MinorVersion extends AbstractTagGroup
{

  protected string $id = 'Jpeg2000:MinorVersion';

  protected string $name = 'MinorVersion';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Minor Version',
  ];

  protected int $count = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Jpeg2000::FileType
       * line : 154310
       * type : undef
       * writable : false
       * count : 4
       * flags : 
       */
      'id' => 'Jpeg2000::FileType.Jpeg2000:MinorVersion',
      'desc' => [
        'en' => 'Minor Version',
      ],
    ],
  ];

}
