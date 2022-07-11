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
class AudioUsedInputBufferSize extends AbstractTagGroup
{

  protected string $id = 'QuickTime:AudioUsedInputBufferSize';

  protected string $name = 'AudioUsedInputBufferSize';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Audio Used Input Buffer Size',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::EncodingParams
       * line : 313037
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'QuickTime::EncodingParams.QuickTime:AudioUsedInputBufferSize',
      'desc' => [
        'en' => 'Audio Used Input Buffer Size',
      ],
    ],
  ];

}
