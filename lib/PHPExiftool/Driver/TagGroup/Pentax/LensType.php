<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Pentax;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class LensType extends AbstractTagGroup
{

  protected string $id = 'Pentax:LensType';

  protected string $name = 'LensType';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Lens Type',
    'fr' => 'Sorte d\'objectif',
  ];

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Pentax::LensInfo
       * line : 289176
       * type : int8u
       * writable : true
       * count : 2
       * flags : Permanent
       */
      'id' => 'Pentax::LensInfo.Pentax:LensType',
      'desc' => [
        'en' => 'Lens Type',
        'fr' => 'Sorte d\'objectif',
      ],
    ],
    1 => [
      /**
       * table_name : Pentax::LensInfo2
       * line : 290099
       * type : int8u
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Pentax::LensInfo2.Pentax:LensType',
      'desc' => [
        'en' => 'Lens Type',
        'fr' => 'Sorte d\'objectif',
      ],
    ],
    2 => [
      /**
       * table_name : Pentax::LensInfo3
       * line : 291022
       * type : int8u
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Pentax::LensInfo3.Pentax:LensType',
      'desc' => [
        'en' => 'Lens Type',
        'fr' => 'Sorte d\'objectif',
      ],
    ],
    3 => [
      /**
       * table_name : Pentax::LensInfo4
       * line : 291945
       * type : int8u
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Pentax::LensInfo4.Pentax:LensType',
      'desc' => [
        'en' => 'Lens Type',
        'fr' => 'Sorte d\'objectif',
      ],
    ],
    4 => [
      /**
       * table_name : Pentax::LensInfo5
       * line : 292868
       * type : int8u
       * writable : true
       * count : 5
       * flags : Permanent
       */
      'id' => 'Pentax::LensInfo5.Pentax:LensType',
      'desc' => [
        'en' => 'Lens Type',
        'fr' => 'Sorte d\'objectif',
      ],
    ],
    5 => [
      /**
       * table_name : Pentax::LensRec
       * line : 293822
       * type : int8u
       * writable : true
       * count : 2
       * flags : Permanent
       */
      'id' => 'Pentax::LensRec.Pentax:LensType',
      'desc' => [
        'en' => 'Lens Type',
        'fr' => 'Sorte d\'objectif',
      ],
    ],
  ];

}
