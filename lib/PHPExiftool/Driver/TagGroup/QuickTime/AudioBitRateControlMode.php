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
class AudioBitRateControlMode extends AbstractTagGroup
{

  protected string $id = 'QuickTime:AudioBitRateControlMode';

  protected string $name = 'AudioBitRateControlMode';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Audio Bit Rate Control Mode',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::EncodingParams
       * line : 312982
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'QuickTime::EncodingParams.QuickTime:AudioBitRateControlMode',
      'desc' => [
        'en' => 'Audio Bit Rate Control Mode',
      ],
    ],
  ];

}
