<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AFAreaXPosition extends AbstractTagGroup
{

  protected string $id = 'Nikon:AFAreaXPosition';

  protected string $name = 'AFAreaXPosition';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'AF Area X Position',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::AFInfo2
       * line : 190299
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::AFInfo2.Nikon:AFAreaXPosition',
      'desc' => [
        'en' => 'AF Area X Position',
      ],
    ],
    1 => [
      /**
       * table_name : Nikon::AFInfo2
       * line : 190355
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::AFInfo2.Nikon:AFAreaXPosition',
      'desc' => [
        'en' => 'AF Area X Position',
      ],
    ],
    2 => [
      /**
       * table_name : Nikon::AFInfo2
       * line : 191322
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::AFInfo2.Nikon:AFAreaXPosition',
      'desc' => [
        'en' => 'AF Area X Position',
      ],
    ],
  ];

}
