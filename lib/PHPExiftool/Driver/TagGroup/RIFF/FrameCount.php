<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\RIFF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FrameCount extends AbstractTagGroup
{

  protected string $id = 'RIFF:FrameCount';

  protected string $name = 'FrameCount';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Frame Count',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : RIFF::AVIHeader
       * line : 327281
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'RIFF::AVIHeader.RIFF:FrameCount',
      'desc' => [
        'en' => 'Frame Count',
      ],
    ],
  ];

}
