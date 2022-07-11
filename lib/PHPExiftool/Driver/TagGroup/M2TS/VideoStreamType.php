<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\M2TS;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class VideoStreamType extends AbstractTagGroup
{

  protected string $id = 'M2TS:VideoStreamType';

  protected string $name = 'VideoStreamType';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Video Stream Type',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : M2TS::Main
       * line : 162973
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'M2TS::Main.M2TS:VideoStreamType',
      'desc' => [
        'en' => 'Video Stream Type',
      ],
    ],
  ];

}
