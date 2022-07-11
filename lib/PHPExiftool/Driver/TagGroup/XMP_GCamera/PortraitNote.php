<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_GCamera;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PortraitNote extends AbstractTagGroup
{

  protected string $id = 'XMP-GCamera:PortraitNote';

  protected string $name = 'PortraitNote';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Portrait Note',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::GCamera
       * line : 397232
       * type : string
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'XMP::GCamera.XMP-GCamera:PortraitNote',
      'desc' => [
        'en' => 'Portrait Note',
      ],
    ],
  ];

}
