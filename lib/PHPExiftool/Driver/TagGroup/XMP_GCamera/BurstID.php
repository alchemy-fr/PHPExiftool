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
class BurstID extends AbstractTagGroup
{

  protected string $id = 'XMP-GCamera:BurstID';

  protected string $name = 'BurstID';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Burst ID',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::GCamera
       * line : 397206
       * type : string
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'XMP::GCamera.XMP-GCamera:BurstID',
      'desc' => [
        'en' => 'Burst ID',
      ],
    ],
  ];

}
