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
class ExitPupilPosition extends AbstractTagGroup
{

  protected string $id = 'Nikon:ExitPupilPosition';

  protected string $name = 'ExitPupilPosition';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Exit Pupil Position',
    'fr' => 'Position de la pupille de sortie',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::LensData01
       * line : 195971
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::LensData01.Nikon:ExitPupilPosition',
      'desc' => [
        'en' => 'Exit Pupil Position',
        'fr' => 'Position de la pupille de sortie',
      ],
    ],
    1 => [
      /**
       * table_name : Nikon::LensData0204
       * line : 196112
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::LensData0204.Nikon:ExitPupilPosition',
      'desc' => [
        'en' => 'Exit Pupil Position',
        'fr' => 'Position de la pupille de sortie',
      ],
    ],
    2 => [
      /**
       * table_name : Nikon::LensData0800
       * line : 196319
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::LensData0800.Nikon:ExitPupilPosition',
      'desc' => [
        'en' => 'Exit Pupil Position',
        'fr' => 'Position de la pupille de sortie',
      ],
    ],
  ];

}
