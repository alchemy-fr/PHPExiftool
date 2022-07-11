<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_dex;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CRC32 extends AbstractTagGroup
{

  protected string $id = 'XMP-dex:CRC32';

  protected string $name = 'CRC32';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'CRC32',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::dex
       * line : 405258
       * type : integer
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'XMP::dex.XMP-dex:CRC32',
      'desc' => [
        'en' => 'CRC32',
      ],
    ],
  ];

}
