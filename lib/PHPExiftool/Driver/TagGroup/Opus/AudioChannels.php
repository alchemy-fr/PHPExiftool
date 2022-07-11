<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Opus;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AudioChannels extends AbstractTagGroup
{

  protected string $id = 'Opus:AudioChannels';

  protected string $name = 'AudioChannels';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Audio Channels',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Opus::Header
       * line : 264082
       * type : int8u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Opus::Header.Opus:AudioChannels',
      'desc' => [
        'en' => 'Audio Channels',
      ],
    ],
  ];

}
