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
class BinaryData extends AbstractTagGroup
{

  protected string $id = 'Jpeg2000:BinaryData';

  protected string $name = 'BinaryData';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Binary Data',
  ];

  protected int $count = 0;

  protected int $flags = 2;

  protected array $tags = [
    0 => [
      /**
       * table_name : Jpeg2000::Main
       * line : 154495
       * type : undef
       * writable : false
       * count : 
       * flags : Binary
       */
      'id' => 'Jpeg2000::Main.Jpeg2000:BinaryData',
      'desc' => [
        'en' => 'Binary Data',
      ],
    ],
  ];

}
