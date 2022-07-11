<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Sony;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PotentialFace8Position extends AbstractTagGroup
{

  protected string $id = 'Sony:PotentialFace8Position';

  protected string $name = 'PotentialFace8Position';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Potential Face 8 Position',
  ];

  protected int $count = 4;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::FaceInfoA
       * line : 353168
       * type : int16u
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Sony::FaceInfoA.Sony:PotentialFace8Position',
      'desc' => [
        'en' => 'Potential Face 8 Position',
      ],
    ],
  ];

}
