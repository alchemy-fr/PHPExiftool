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
class RepeatedDataBytes extends AbstractTagGroup
{

  protected string $id = 'QuickTime:RepeatedDataBytes';

  protected string $name = 'RepeatedDataBytes';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Repeated Data Bytes',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::HintTrackInfo
       * line : 314116
       * type : int64u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'QuickTime::HintTrackInfo.QuickTime:RepeatedDataBytes',
      'desc' => [
        'en' => 'Repeated Data Bytes',
      ],
    ],
  ];

}
