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
class VerticalClockOverlaps extends AbstractTagGroup
{

  protected string $id = 'KodakIFD:VerticalClockOverlaps';

  protected string $name = 'VerticalClockOverlaps';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Vertical Clock Overlaps',
  ];

  protected int $count = 2;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Kodak::IFD
       * line : 155262
       * type : int16u
       * writable : true
       * count : 2
       * flags : Permanent
       */
      'id' => 'Kodak::IFD.KodakIFD:VerticalClockOverlaps',
      'desc' => [
        'en' => 'Vertical Clock Overlaps',
      ],
    ],
  ];

}
