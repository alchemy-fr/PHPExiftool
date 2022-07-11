<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Canon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AFAreaXPositions extends AbstractTagGroup
{

  protected string $id = 'Canon:AFAreaXPositions';

  protected string $name = 'AFAreaXPositions';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'AF Area X Positions',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::AFInfo
       * line : 4079
       * type : int16s
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::AFInfo.Canon:AFAreaXPositions',
      'desc' => [
        'en' => 'AF Area X Positions',
      ],
    ],
    1 => [
      /**
       * table_name : Canon::AFInfo2
       * line : 4239
       * type : int16s
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::AFInfo2.Canon:AFAreaXPositions',
      'desc' => [
        'en' => 'AF Area X Positions',
      ],
    ],
  ];

}
