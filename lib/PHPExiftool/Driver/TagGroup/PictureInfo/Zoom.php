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
class Zoom extends AbstractTagGroup
{

  protected string $id = 'PictureInfo:Zoom';

  protected string $name = 'Zoom';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Zoom',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : APP12::PictureInfo
       * line : 828
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'APP12::PictureInfo.PictureInfo:Zoom',
      'desc' => [
        'en' => 'Zoom',
      ],
    ],
  ];

}
