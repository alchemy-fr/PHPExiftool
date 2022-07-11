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
class MovieFunc2Button extends AbstractTagGroup
{

  protected string $id = 'NikonSettings:MovieFunc2Button';

  protected string $name = 'MovieFunc2Button';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Movie Func 2 Button',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : NikonSettings::Main
       * line : 247150
       * type : ?
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonSettings::Main.NikonSettings:MovieFunc2Button',
      'desc' => [
        'en' => 'Movie Func 2 Button',
      ],
    ],
    1 => [
      /**
       * table_name : NikonSettings::Main
       * line : 247227
       * type : ?
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonSettings::Main.NikonSettings:MovieFunc2Button',
      'desc' => [
        'en' => 'Movie Func 2 Button',
      ],
    ],
  ];

}
