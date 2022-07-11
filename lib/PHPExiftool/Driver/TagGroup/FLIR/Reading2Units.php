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
class Reading2Units extends AbstractTagGroup
{

  protected string $id = 'FLIR:Reading2Units';

  protected string $name = 'Reading2Units';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Reading 2 Units',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : FLIR::MeterLink
       * line : 123660
       * type : int8u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'FLIR::MeterLink.FLIR:Reading2Units',
      'desc' => [
        'en' => 'Reading 2 Units',
      ],
    ],
  ];

}
