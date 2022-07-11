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
class OmenAtCaptureStrength extends AbstractTagGroup
{

  protected string $id = 'KodakIFD:OmenAtCaptureStrength';

  protected string $name = 'OmenAtCaptureStrength';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Omen At Capture Strength',
  ];

  protected int $count = 4;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Kodak::IFD
       * line : 156000
       * type : int32s
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Kodak::IFD.KodakIFD:OmenAtCaptureStrength',
      'desc' => [
        'en' => 'Omen At Capture Strength',
      ],
    ],
  ];

}
