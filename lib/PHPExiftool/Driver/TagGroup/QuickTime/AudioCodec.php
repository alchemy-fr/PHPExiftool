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
class AudioCodec extends AbstractTagGroup
{

  protected string $id = 'QuickTime:AudioCodec';

  protected string $name = 'AudioCodec';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Audio Codec',
  ];

  protected int $count = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::AudioProf
       * line : 310720
       * type : undef
       * writable : false
       * count : 4
       * flags : 
       */
      'id' => 'QuickTime::AudioProf.QuickTime:AudioCodec',
      'desc' => [
        'en' => 'Audio Codec',
      ],
    ],
  ];

}
