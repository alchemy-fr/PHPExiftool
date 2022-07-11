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
class K2 extends AbstractTagGroup
{

  protected string $id = 'DJI:K2';

  protected string $name = 'K2';

  protected ?string $phpType = 'float';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'K2',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : DJI::ThermalParams
       * line : 104891
       * type : float
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'DJI::ThermalParams.DJI:K2',
      'desc' => [
        'en' => 'K2',
      ],
    ],
  ];

}
