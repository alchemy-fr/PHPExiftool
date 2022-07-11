<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\NITF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class BlocksPerRow extends AbstractTagGroup
{

  protected string $id = 'NITF:BlocksPerRow';

  protected string $name = 'BlocksPerRow';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Blocks Per Row',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : JPEG::NITF
       * line : 153121
       * type : int16u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'JPEG::NITF.NITF:BlocksPerRow',
      'desc' => [
        'en' => 'Blocks Per Row',
      ],
    ],
  ];

}
