<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\CanonRaw;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CompressedDataOffset extends AbstractTagGroup
{

  protected string $id = 'CanonRaw:CompressedDataOffset';

  protected string $name = 'CompressedDataOffset';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Compressed Data Offset',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : CanonRaw::DecoderTable
       * line : 78447
       * type : int32u
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'CanonRaw::DecoderTable.CanonRaw:CompressedDataOffset',
      'desc' => [
        'en' => 'Compressed Data Offset',
      ],
    ],
  ];

}
