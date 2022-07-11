<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MovieType extends AbstractTagGroup
{

  protected string $id = 'Nikon:MovieType';

  protected string $name = 'MovieType';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Movie Type',
  ];

  protected int $count = 0;

  protected int $flags = 36;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::MenuSettingsZ7II
       * line : 200450
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Nikon::MenuSettingsZ7II.Nikon:MovieType',
      'desc' => [
        'en' => 'Movie Type',
      ],
    ],
    1 => [
      /**
       * table_name : Nikon::MenuSettingsZ9
       * line : 201606
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Nikon::MenuSettingsZ9.Nikon:MovieType',
      'desc' => [
        'en' => 'Movie Type',
      ],
    ],
    2 => [
      /**
       * table_name : Nikon::ShotInfoD6
       * line : 208574
       * type : ?
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Nikon::ShotInfoD6.Nikon:MovieType',
      'desc' => [
        'en' => 'Movie Type',
      ],
    ],
  ];

}
