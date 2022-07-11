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
class Canon_AFInfo_0x000b extends AbstractTagGroup
{

  protected string $id = 'Canon:Canon_AFInfo_0x000b';

  protected string $name = 'Canon_AFInfo_0x000b';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Canon AF Info 0x000b',
  ];

  protected int $count = 8;

  protected int $flags = 36;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::AFInfo
       * line : 4105
       * type : int16u
       * writable : false
       * count : 8
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::AFInfo.Canon:Canon_AFInfo_0x000b',
      'desc' => [
        'en' => 'Canon AF Info 0x000b',
      ],
    ],
  ];

}
