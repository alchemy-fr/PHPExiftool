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
class PixelShiftResolution extends AbstractTagGroup
{

  protected string $id = 'Pentax:PixelShiftResolution';

  protected string $name = 'PixelShiftResolution';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Pixel Shift Resolution',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Pentax::PixelShiftInfo
       * line : 301887
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Pentax::PixelShiftInfo.Pentax:PixelShiftResolution',
      'desc' => [
        'en' => 'Pixel Shift Resolution',
      ],
    ],
  ];

}
