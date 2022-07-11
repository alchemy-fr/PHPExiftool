<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_xmpDM;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class VideoFrameSizeW extends AbstractTagGroup
{

  protected string $id = 'XMP-xmpDM:VideoFrameSizeW';

  protected string $name = 'VideoFrameSizeW';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Video Frame Size W',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::xmpDM
       * line : 414095
       * type : real
       * writable : true
       * count : 
       * flags : Flattened
       */
      'id' => 'XMP::xmpDM.XMP-xmpDM:VideoFrameSizeW',
      'desc' => [
        'en' => 'Video Frame Size W',
      ],
    ],
  ];

}
