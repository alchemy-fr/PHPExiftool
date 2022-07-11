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
class KhufuLinearBlueMixingCoefficient extends AbstractTagGroup
{

  protected string $id = 'KodakIFD:KhufuLinearBlueMixingCoefficient';

  protected string $name = 'KhufuLinearBlueMixingCoefficient';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Khufu Linear Blue Mixing Coefficient',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Kodak::IFD
       * line : 157198
       * type : ?
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Kodak::IFD.KodakIFD:KhufuLinearBlueMixingCoefficient',
      'desc' => [
        'en' => 'Khufu Linear Blue Mixing Coefficient',
      ],
    ],
  ];

}
