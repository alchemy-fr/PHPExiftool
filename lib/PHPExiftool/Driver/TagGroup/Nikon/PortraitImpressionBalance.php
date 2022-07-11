<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PortraitImpressionBalance extends AbstractTagGroup
{

  protected string $id = 'Nikon:PortraitImpressionBalance';

  protected string $name = 'PortraitImpressionBalance';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Portrait Impression Balance',
  ];

  protected int $count = 2;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::ShotInfoZ7II
       * line : 209679
       * type : int8u
       * writable : false
       * count : 2
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfoZ7II.Nikon:PortraitImpressionBalance',
      'desc' => [
        'en' => 'Portrait Impression Balance',
      ],
    ],
  ];

}
