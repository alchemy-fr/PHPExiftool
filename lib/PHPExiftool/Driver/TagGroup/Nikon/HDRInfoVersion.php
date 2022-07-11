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
class HDRInfoVersion extends AbstractTagGroup
{

  protected string $id = 'Nikon:HDRInfoVersion';

  protected string $name = 'HDRInfoVersion';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'HDR Info Version',
  ];

  protected int $count = 4;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::HDRInfo
       * line : 195607
       * type : string
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Nikon::HDRInfo.Nikon:HDRInfoVersion',
      'desc' => [
        'en' => 'HDR Info Version',
      ],
    ],
  ];

}
