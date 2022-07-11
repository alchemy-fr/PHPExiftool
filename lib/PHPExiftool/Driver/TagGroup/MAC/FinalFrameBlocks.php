<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MAC;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FinalFrameBlocks extends AbstractTagGroup
{

  protected string $id = 'MAC:FinalFrameBlocks';

  protected string $name = 'FinalFrameBlocks';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Final Frame Blocks',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : APE::NewHeader
       * line : 358
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'APE::NewHeader.MAC:FinalFrameBlocks',
      'desc' => [
        'en' => 'Final Frame Blocks',
      ],
    ],
    1 => [
      /**
       * table_name : APE::OldHeader
       * line : 443
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'APE::OldHeader.MAC:FinalFrameBlocks',
      'desc' => [
        'en' => 'Final Frame Blocks',
      ],
    ],
  ];

}
