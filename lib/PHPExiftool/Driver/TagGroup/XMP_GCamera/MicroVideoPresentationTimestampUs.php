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
class MicroVideoPresentationTimestampUs extends AbstractTagGroup
{

  protected string $id = 'XMP-GCamera:MicroVideoPresentationTimestampUs';

  protected string $name = 'MicroVideoPresentationTimestampUs';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Micro Video Presentation Timestamp Us',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::GCamera
       * line : 397226
       * type : integer
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'XMP::GCamera.XMP-GCamera:MicroVideoPresentationTimestampUs',
      'desc' => [
        'en' => 'Micro Video Presentation Timestamp Us',
      ],
    ],
  ];

}
