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
class TotalBytesNoRTPHeaders extends AbstractTagGroup
{

  protected string $id = 'QuickTime:TotalBytesNoRTPHeaders';

  protected string $name = 'TotalBytesNoRTPHeaders';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Total Bytes No RTP Headers',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::HintTrackInfo
       * line : 314145
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'QuickTime::HintTrackInfo.QuickTime:TotalBytesNoRTPHeaders',
      'desc' => [
        'en' => 'Total Bytes No RTP Headers',
      ],
    ],
    1 => [
      /**
       * table_name : QuickTime::HintTrackInfo
       * line : 314148
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'QuickTime::HintTrackInfo.QuickTime:TotalBytesNoRTPHeaders',
      'desc' => [
        'en' => 'Total Bytes No RTP Headers',
      ],
    ],
    2 => [
      /**
       * table_name : QuickTime::HintTrackInfo
       * line : 314151
       * type : int64u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'QuickTime::HintTrackInfo.QuickTime:TotalBytesNoRTPHeaders',
      'desc' => [
        'en' => 'Total Bytes No RTP Headers',
      ],
    ],
  ];

}
