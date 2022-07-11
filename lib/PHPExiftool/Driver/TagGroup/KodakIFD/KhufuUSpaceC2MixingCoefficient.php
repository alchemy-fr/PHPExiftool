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
class KhufuUSpaceC2MixingCoefficient extends AbstractTagGroup
{

  protected string $id = 'KodakIFD:KhufuUSpaceC2MixingCoefficient';

  protected string $name = 'KhufuUSpaceC2MixingCoefficient';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Khufu U Space C2 Mixing Coefficient',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Kodak::IFD
       * line : 157201
       * type : ?
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Kodak::IFD.KodakIFD:KhufuUSpaceC2MixingCoefficient',
      'desc' => [
        'en' => 'Khufu U Space C2 Mixing Coefficient',
      ],
    ],
  ];

}
