<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\DJI;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class B1 extends AbstractTagGroup
{

  protected string $id = 'DJI:B1';

  protected string $name = 'B1';

  protected ?string $phpType = 'float';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'B1',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : DJI::ThermalParams
       * line : 104903
       * type : float
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'DJI::ThermalParams.DJI:B1',
      'desc' => [
        'en' => 'B1',
      ],
    ],
  ];

}
