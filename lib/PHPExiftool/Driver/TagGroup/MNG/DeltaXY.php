<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MNG;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class DeltaXY extends AbstractTagGroup
{

  protected string $id = 'MNG:DeltaXY';

  protected string $name = 'DeltaXY';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Delta XY',
  ];

  protected int $count = 2;

  protected array $tags = [
    0 => [
      /**
       * table_name : MNG::CloneObject
       * line : 165083
       * type : int32u
       * writable : false
       * count : 2
       * flags : 
       */
      'id' => 'MNG::CloneObject.MNG:DeltaXY',
      'desc' => [
        'en' => 'Delta XY',
      ],
    ],
    1 => [
      /**
       * table_name : MNG::MoveObjects
       * line : 165590
       * type : int32u
       * writable : false
       * count : 2
       * flags : 
       */
      'id' => 'MNG::MoveObjects.MNG:DeltaXY',
      'desc' => [
        'en' => 'Delta XY',
      ],
    ],
  ];

}
