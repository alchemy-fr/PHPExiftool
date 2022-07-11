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
class ColorTempUnknown30 extends AbstractTagGroup
{

  protected string $id = 'Canon:ColorTempUnknown30';

  protected string $name = 'ColorTempUnknown30';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Color Temp Unknown 30',
  ];

  protected int $count = 0;

  protected int $flags = 36;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::ColorData8
       * line : 62574
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::ColorData8.Canon:ColorTempUnknown30',
      'desc' => [
        'en' => 'Color Temp Unknown 30',
      ],
    ],
  ];

}
