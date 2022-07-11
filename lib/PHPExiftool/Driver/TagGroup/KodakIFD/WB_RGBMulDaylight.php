<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\KodakIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class WB_RGBMulDaylight extends AbstractTagGroup
{

  protected string $id = 'KodakIFD:WB_RGBMulDaylight';

  protected string $name = 'WB_RGBMulDaylight';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'WB RGB Mul Daylight',
  ];

  protected int $count = 3;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Kodak::IFD
       * line : 155582
       * type : rational64u
       * writable : true
       * count : 3
       * flags : Permanent
       */
      'id' => 'Kodak::IFD.KodakIFD:WB_RGBMulDaylight',
      'desc' => [
        'en' => 'WB RGB Mul Daylight',
      ],
    ],
  ];

}
