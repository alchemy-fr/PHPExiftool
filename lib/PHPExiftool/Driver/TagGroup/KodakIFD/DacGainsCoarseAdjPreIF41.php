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
class DacGainsCoarseAdjPreIF41 extends AbstractTagGroup
{

  protected string $id = 'KodakIFD:DacGainsCoarseAdjPreIF41';

  protected string $name = 'DacGainsCoarseAdjPreIF41';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Dac Gains Coarse Adj Pre IF41',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Kodak::IFD
       * line : 156720
       * type : ?
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Kodak::IFD.KodakIFD:DacGainsCoarseAdjPreIF41',
      'desc' => [
        'en' => 'Dac Gains Coarse Adj Pre IF41',
      ],
    ],
  ];

}
