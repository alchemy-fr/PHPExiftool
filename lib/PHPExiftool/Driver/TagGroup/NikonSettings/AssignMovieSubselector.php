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
class AssignMovieSubselector extends AbstractTagGroup
{

  protected string $id = 'NikonSettings:AssignMovieSubselector';

  protected string $name = 'AssignMovieSubselector';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Assign Movie Subselector',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : NikonSettings::Main
       * line : 247253
       * type : ?
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonSettings::Main.NikonSettings:AssignMovieSubselector',
      'desc' => [
        'en' => 'Assign Movie Subselector',
      ],
    ],
    1 => [
      /**
       * table_name : NikonSettings::Main
       * line : 247291
       * type : ?
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonSettings::Main.NikonSettings:AssignMovieSubselector',
      'desc' => [
        'en' => 'Assign Movie Subselector',
      ],
    ],
  ];

}
