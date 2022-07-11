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
class TimestampRandomOffset extends AbstractTagGroup
{

  protected string $id = 'QuickTime:TimestampRandomOffset';

  protected string $name = 'TimestampRandomOffset';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Timestamp Random Offset',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::HintSampleDesc
       * line : 314100
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'QuickTime::HintSampleDesc.QuickTime:TimestampRandomOffset',
      'desc' => [
        'en' => 'Timestamp Random Offset',
      ],
    ],
  ];

}
