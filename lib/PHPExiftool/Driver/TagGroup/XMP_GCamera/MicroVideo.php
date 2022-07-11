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
class MicroVideo extends AbstractTagGroup
{

  protected string $id = 'XMP-GCamera:MicroVideo';

  protected string $name = 'MicroVideo';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Micro Video',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::GCamera
       * line : 397220
       * type : integer
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'XMP::GCamera.XMP-GCamera:MicroVideo',
      'desc' => [
        'en' => 'Micro Video',
      ],
    ],
  ];

}
