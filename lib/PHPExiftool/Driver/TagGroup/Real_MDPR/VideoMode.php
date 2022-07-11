<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Real_MDPR;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class VideoMode extends AbstractTagGroup
{

  protected string $id = 'Real-MDPR:VideoMode';

  protected string $name = 'VideoMode';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Video Mode',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Real::FileInfo
       * line : 330704
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Real::FileInfo.Real-MDPR:VideoMode',
      'desc' => [
        'en' => 'Video Mode',
      ],
    ],
  ];

}
