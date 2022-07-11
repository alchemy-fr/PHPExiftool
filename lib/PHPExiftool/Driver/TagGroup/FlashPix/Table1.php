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
class Table1 extends AbstractTagGroup
{

  protected string $id = 'FlashPix:Table1';

  protected string $name = 'Table1';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Table 1',
  ];

  protected int $count = 0;

  protected int $flags = 2;

  protected array $tags = [
    0 => [
      /**
       * table_name : FlashPix::Main
       * line : 126909
       * type : ?
       * writable : false
       * count : 
       * flags : Binary
       */
      'id' => 'FlashPix::Main.FlashPix:Table1',
      'desc' => [
        'en' => 'Table 1',
      ],
    ],
  ];

}
