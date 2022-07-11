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
class Param3 extends AbstractTagGroup
{

  protected string $id = 'FLIR:Param3';

  protected string $name = 'Param3';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Param 3',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : FLIR::ParamInfo
       * line : 123907
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'FLIR::ParamInfo.FLIR:Param3',
      'desc' => [
        'en' => 'Param 3',
      ],
    ],
  ];

}
