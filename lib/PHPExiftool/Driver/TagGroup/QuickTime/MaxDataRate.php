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
class MaxDataRate extends AbstractTagGroup
{

  protected string $id = 'QuickTime:MaxDataRate';

  protected string $name = 'MaxDataRate';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Max Data Rate',
  ];

  protected int $count = 2;

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::HintTrackInfo
       * line : 314119
       * type : int32u
       * writable : false
       * count : 2
       * flags : 
       */
      'id' => 'QuickTime::HintTrackInfo.QuickTime:MaxDataRate',
      'desc' => [
        'en' => 'Max Data Rate',
      ],
    ],
  ];

}
