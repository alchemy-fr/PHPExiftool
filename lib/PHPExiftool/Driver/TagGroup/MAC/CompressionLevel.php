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
class CompressionLevel extends AbstractTagGroup
{

  protected string $id = 'MAC:CompressionLevel';

  protected string $name = 'CompressionLevel';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Compression Level',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : APE::NewHeader
       * line : 345
       * type : int16u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'APE::NewHeader.MAC:CompressionLevel',
      'desc' => [
        'en' => 'Compression Level',
      ],
    ],
    1 => [
      /**
       * table_name : APE::OldHeader
       * line : 417
       * type : int16u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'APE::OldHeader.MAC:CompressionLevel',
      'desc' => [
        'en' => 'Compression Level',
      ],
    ],
  ];

}
