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
class CalculatedScaleMin extends AbstractTagGroup
{

  protected string $id = 'FLIR:CalculatedScaleMin';

  protected string $name = 'CalculatedScaleMin';

  protected ?string $phpType = 'float';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Calculated Scale Min',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : FLIR::FPF
       * line : 122987
       * type : float
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'FLIR::FPF.FLIR:CalculatedScaleMin',
      'desc' => [
        'en' => 'Calculated Scale Min',
      ],
    ],
  ];

}
