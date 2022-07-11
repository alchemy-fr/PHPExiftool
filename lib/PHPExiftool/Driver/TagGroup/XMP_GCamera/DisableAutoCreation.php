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
class DisableAutoCreation extends AbstractTagGroup
{

  protected string $id = 'XMP-GCamera:DisableAutoCreation';

  protected string $name = 'DisableAutoCreation';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Disable Auto Creation',
  ];

  protected int $count = 0;

  protected int $flags = 320;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::GCamera
       * line : 397214
       * type : string
       * writable : true
       * count : 
       * flags : Bag,List
       */
      'id' => 'XMP::GCamera.XMP-GCamera:DisableAutoCreation',
      'desc' => [
        'en' => 'Disable Auto Creation',
      ],
    ],
  ];

}
