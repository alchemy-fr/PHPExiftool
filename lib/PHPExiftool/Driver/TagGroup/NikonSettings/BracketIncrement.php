<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\NikonSettings;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class BracketIncrement extends AbstractTagGroup
{

  protected string $id = 'NikonSettings:BracketIncrement';

  protected string $name = 'BracketIncrement';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Bracket Increment',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : NikonSettings::Main
       * line : 247976
       * type : ?
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonSettings::Main.NikonSettings:BracketIncrement',
      'desc' => [
        'en' => 'Bracket Increment',
      ],
    ],
    1 => [
      /**
       * table_name : NikonSettings::Main
       * line : 247996
       * type : ?
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonSettings::Main.NikonSettings:BracketIncrement',
      'desc' => [
        'en' => 'Bracket Increment',
      ],
    ],
    2 => [
      /**
       * table_name : NikonSettings::Main
       * line : 247999
       * type : ?
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonSettings::Main.NikonSettings:BracketIncrement',
      'desc' => [
        'en' => 'Bracket Increment',
      ],
    ],
  ];

}
