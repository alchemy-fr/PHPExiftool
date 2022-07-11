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
class FocusMode extends AbstractTagGroup
{

  protected string $id = 'PictureInfo:FocusMode';

  protected string $name = 'FocusMode';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Focus Mode',
    'fr' => 'Mode mise au point',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : APP12::PictureInfo
       * line : 634
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'APP12::PictureInfo.PictureInfo:FocusMode',
      'desc' => [
        'en' => 'Focus Mode',
        'fr' => 'Mode mise au point',
      ],
    ],
  ];

}
