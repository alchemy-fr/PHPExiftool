<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MXF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FieldOfViewHorizontal extends AbstractTagGroup
{

  protected string $id = 'MXF:FieldOfViewHorizontal';

  protected string $name = 'FieldOfViewHorizontal';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Field Of View Horizontal',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 169606
       * type : float
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:FieldOfViewHorizontal',
      'desc' => [
        'en' => 'Field Of View Horizontal',
      ],
    ],
    1 => [
      /**
       * table_name : MXF::Main
       * line : 170672
       * type : int16u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:FieldOfViewHorizontal',
      'desc' => [
        'en' => 'Field Of View Horizontal',
      ],
    ],
  ];

}
