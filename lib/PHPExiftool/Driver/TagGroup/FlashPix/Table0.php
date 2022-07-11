<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\FlashPix;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Table0 extends AbstractTagGroup
{

  protected string $id = 'FlashPix:Table0';

  protected string $name = 'Table0';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Table 0',
  ];

  protected int $count = 0;

  protected int $flags = 2;

  protected array $tags = [
    0 => [
      /**
       * table_name : FlashPix::Main
       * line : 126906
       * type : ?
       * writable : false
       * count : 
       * flags : Binary
       */
      'id' => 'FlashPix::Main.FlashPix:Table0',
      'desc' => [
        'en' => 'Table 0',
      ],
    ],
  ];

}
