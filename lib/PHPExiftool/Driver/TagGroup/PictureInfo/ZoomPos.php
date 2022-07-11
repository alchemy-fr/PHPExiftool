<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\PictureInfo;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ZoomPos extends AbstractTagGroup
{

  protected string $id = 'PictureInfo:ZoomPos';

  protected string $name = 'ZoomPos';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Zoom Pos',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : APP12::PictureInfo
       * line : 835
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'APP12::PictureInfo.PictureInfo:ZoomPos',
      'desc' => [
        'en' => 'Zoom Pos',
      ],
    ],
  ];

}
