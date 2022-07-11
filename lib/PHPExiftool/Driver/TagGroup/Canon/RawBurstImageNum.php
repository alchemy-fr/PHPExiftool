<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Canon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RawBurstImageNum extends AbstractTagGroup
{

  protected string $id = 'Canon:RawBurstImageNum';

  protected string $name = 'RawBurstImageNum';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Raw Burst Image Num',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::RawBurstInfo
       * line : 70045
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::RawBurstInfo.Canon:RawBurstImageNum',
      'desc' => [
        'en' => 'Raw Burst Image Num',
      ],
    ],
  ];

}
