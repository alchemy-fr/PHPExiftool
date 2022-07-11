<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Pentax;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class TTL_DA_ADown extends AbstractTagGroup
{

  protected string $id = 'Pentax:TTL_DA_ADown';

  protected string $name = 'TTL_DA_ADown';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'TTL DA A Down',
    'fr' => 'Segment de mesure flash esclave 6',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Pentax::FlashInfo
       * line : 288519
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Pentax::FlashInfo.Pentax:TTL_DA_ADown',
      'desc' => [
        'en' => 'TTL DA A Down',
        'fr' => 'Segment de mesure flash esclave 6',
      ],
    ],
  ];

}
