<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\FLIR;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Meas1Params extends AbstractTagGroup
{

  protected string $id = 'FLIR:Meas1Params';

  protected string $name = 'Meas1Params';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Meas 1 Params',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : FLIR::MeasInfo
       * line : 123578
       * type : int16u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'FLIR::MeasInfo.FLIR:Meas1Params',
      'desc' => [
        'en' => 'Meas 1 Params',
      ],
    ],
  ];

}
