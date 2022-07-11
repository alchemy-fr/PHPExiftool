<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\GIF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ChannelUsage extends AbstractTagGroup
{

  protected string $id = 'GIF:ChannelUsage';

  protected string $name = 'ChannelUsage';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Channel Usage',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : GIF::MIDIControl
       * line : 131639
       * type : int16u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'GIF::MIDIControl.GIF:ChannelUsage',
      'desc' => [
        'en' => 'Channel Usage',
      ],
    ],
  ];

}
