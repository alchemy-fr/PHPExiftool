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
class D2 extends AbstractTagGroup
{

  protected string $id = 'DJI:D2';

  protected string $name = 'D2';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'D2',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : DJI::ThermalParams
       * line : 104928
       * type : int32s
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'DJI::ThermalParams.DJI:D2',
      'desc' => [
        'en' => 'D2',
      ],
    ],
  ];

}
