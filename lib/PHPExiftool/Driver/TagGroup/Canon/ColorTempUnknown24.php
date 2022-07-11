<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Canon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ColorTempUnknown24 extends AbstractTagGroup
{

  protected string $id = 'Canon:ColorTempUnknown24';

  protected string $name = 'ColorTempUnknown24';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Color Temp Unknown 24',
  ];

  protected int $count = 0;

  protected int $flags = 36;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::ColorData10
       * line : 60235
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorData10.Canon:ColorTempUnknown24',
      'desc' => [
        'en' => 'Color Temp Unknown 24',
      ],
    ],
    1 => [
      /**
       * table_name : Canon::ColorData11
       * line : 60696
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorData11.Canon:ColorTempUnknown24',
      'desc' => [
        'en' => 'Color Temp Unknown 24',
      ],
    ],
    2 => [
      /**
       * table_name : Canon::ColorData8
       * line : 62526
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorData8.Canon:ColorTempUnknown24',
      'desc' => [
        'en' => 'Color Temp Unknown 24',
      ],
    ],
    3 => [
      /**
       * table_name : Canon::ColorData9
       * line : 63008
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorData9.Canon:ColorTempUnknown24',
      'desc' => [
        'en' => 'Color Temp Unknown 24',
      ],
    ],
  ];

}
