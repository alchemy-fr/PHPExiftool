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
class StreamName extends AbstractTagGroup
{

  protected string $id = 'RIFF:StreamName';

  protected string $name = 'StreamName';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Stream Name',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : RIFF::Stream
       * line : 329094
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'RIFF::Stream.RIFF:StreamName',
      'desc' => [
        'en' => 'Stream Name',
      ],
    ],
  ];

}
