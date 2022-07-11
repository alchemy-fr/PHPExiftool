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
class ColorTempPC1 extends AbstractTagGroup
{

  protected string $id = 'Canon:ColorTempPC1';

  protected string $name = 'ColorTempPC1';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Color Temp PC1',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::ColorData2
       * line : 61030
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::ColorData2.Canon:ColorTempPC1',
      'desc' => [
        'en' => 'Color Temp PC1',
      ],
    ],
    1 => [
      /**
       * table_name : Canon::ColorData3
       * line : 61221
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::ColorData3.Canon:ColorTempPC1',
      'desc' => [
        'en' => 'Color Temp PC1',
      ],
    ],
  ];

}
