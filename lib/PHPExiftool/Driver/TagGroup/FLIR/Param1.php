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
class Param1 extends AbstractTagGroup
{

  protected string $id = 'FLIR:Param1';

  protected string $name = 'Param1';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Param 1',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : FLIR::ParamInfo
       * line : 123901
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'FLIR::ParamInfo.FLIR:Param1',
      'desc' => [
        'en' => 'Param 1',
      ],
    ],
  ];

}
