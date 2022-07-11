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
class CuePoints extends AbstractTagGroup
{

  protected string $id = 'RIFF:CuePoints';

  protected string $name = 'CuePoints';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Cue Points',
  ];

  protected int $count = 0;

  protected int $flags = 2;

  protected array $tags = [
    0 => [
      /**
       * table_name : RIFF::Main
       * line : 329003
       * type : ?
       * writable : false
       * count : 
       * flags : Binary
       */
      'id' => 'RIFF::Main.RIFF:CuePoints',
      'desc' => [
        'en' => 'Cue Points',
      ],
    ],
  ];

}
