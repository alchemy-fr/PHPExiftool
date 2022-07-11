<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\QuickTime;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MetadataSource extends AbstractTagGroup
{

  protected string $id = 'QuickTime:MetadataSource';

  protected string $name = 'MetadataSource';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Metadata Source',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::sv3d
       * line : 327083
       * type : undef
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'QuickTime::sv3d.QuickTime:MetadataSource',
      'desc' => [
        'en' => 'Metadata Source',
      ],
    ],
  ];

}
