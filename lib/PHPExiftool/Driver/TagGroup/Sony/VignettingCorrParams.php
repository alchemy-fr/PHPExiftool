<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Sony;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class VignettingCorrParams extends AbstractTagGroup
{

  protected string $id = 'Sony:VignettingCorrParams';

  protected string $name = 'VignettingCorrParams';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Vignetting Corr Params',
  ];

  protected int $count = 16;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::Tag9405a
       * line : 387902
       * type : int16s
       * writable : true
       * count : 16
       * flags : Permanent
       */
      'id' => 'Sony::Tag9405a.Sony:VignettingCorrParams',
      'desc' => [
        'en' => 'Vignetting Corr Params',
      ],
    ],
    1 => [
      /**
       * table_name : Sony::Tag9405b
       * line : 390551
       * type : int16s
       * writable : true
       * count : 16
       * flags : Permanent
       */
      'id' => 'Sony::Tag9405b.Sony:VignettingCorrParams',
      'desc' => [
        'en' => 'Vignetting Corr Params',
      ],
    ],
    2 => [
      /**
       * table_name : Sony::Tag9405b
       * line : 390558
       * type : int16s
       * writable : true
       * count : 16
       * flags : Permanent
       */
      'id' => 'Sony::Tag9405b.Sony:VignettingCorrParams',
      'desc' => [
        'en' => 'Vignetting Corr Params',
      ],
    ],
    3 => [
      /**
       * table_name : Sony::Tag9405b
       * line : 390565
       * type : int16s
       * writable : true
       * count : 16
       * flags : Permanent
       */
      'id' => 'Sony::Tag9405b.Sony:VignettingCorrParams',
      'desc' => [
        'en' => 'Vignetting Corr Params',
      ],
    ],
    4 => [
      /**
       * table_name : Sony::Tag9405b
       * line : 390569
       * type : int16s
       * writable : true
       * count : 16
       * flags : Permanent
       */
      'id' => 'Sony::Tag9405b.Sony:VignettingCorrParams',
      'desc' => [
        'en' => 'Vignetting Corr Params',
      ],
    ],
    5 => [
      /**
       * table_name : Sony::Tag9416
       * line : 393724
       * type : int16s
       * writable : false
       * count : 16
       * flags : Permanent
       */
      'id' => 'Sony::Tag9416.Sony:VignettingCorrParams',
      'desc' => [
        'en' => 'Vignetting Corr Params',
      ],
    ],
    6 => [
      /**
       * table_name : Sony::Tag9416
       * line : 393728
       * type : int16s
       * writable : false
       * count : 16
       * flags : Permanent
       */
      'id' => 'Sony::Tag9416.Sony:VignettingCorrParams',
      'desc' => [
        'en' => 'Vignetting Corr Params',
      ],
    ],
  ];

}
