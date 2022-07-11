<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MPEG;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MSStereo extends AbstractTagGroup
{

  protected string $id = 'MPEG:MSStereo';

  protected string $name = 'MSStereo';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'MS Stereo',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MPEG::Audio
       * line : 166133
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MPEG::Audio.MPEG:MSStereo',
      'desc' => [
        'en' => 'MS Stereo',
      ],
    ],
  ];

}
