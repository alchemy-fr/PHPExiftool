<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\SR2SubIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class WB_RGBLevelsFluorescentP2 extends AbstractTagGroup
{

  protected string $id = 'SR2SubIFD:WB_RGBLevelsFluorescentP2';

  protected string $name = 'WB_RGBLevelsFluorescentP2';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'WB RGB Levels Fluorescent P2',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::SR2SubIFD
       * line : 362191
       * type : ?
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::SR2SubIFD.SR2SubIFD:WB_RGBLevelsFluorescentP2',
      'desc' => [
        'en' => 'WB RGB Levels Fluorescent P2',
      ],
    ],
  ];

}
