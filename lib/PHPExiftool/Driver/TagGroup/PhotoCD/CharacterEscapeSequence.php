<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\PhotoCD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CharacterEscapeSequence extends AbstractTagGroup
{

  protected string $id = 'PhotoCD:CharacterEscapeSequence';

  protected string $name = 'CharacterEscapeSequence';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Character Escape Sequence',
  ];

  protected int $count = 32;

  protected int $flags = 34;

  protected array $tags = [
    0 => [
      /**
       * table_name : PhotoCD::Main
       * line : 304161
       * type : undef
       * writable : false
       * count : 32
       * flags : Binary,Unknown
       */
      'id' => 'PhotoCD::Main.PhotoCD:CharacterEscapeSequence',
      'desc' => [
        'en' => 'Character Escape Sequence',
      ],
    ],
  ];

}
